-- patch-cache.sql
-- 2003-03-22  <brion@pobox.com>
--
-- Add 'last touched' fields to cur and wiki_user tables.
-- These are useful for maintaining cache consistency.
-- (Updates to OutputPage.php and elsewhere.)
--
-- cur_touched should be set to the current time whenever:
--  * the page is updated
--  * a linked page is created
--  * a linked page is destroyed
--
-- The cur_touched time will then be compared against the
-- timestamps of cached pages to ensure consistency; if
-- cur_touched is later, the page must be regenerated.

ALTER TABLE /*$wgDBprefix*/cur
  ADD COLUMN cur_touched binary(14) NOT NULL default '';

-- Existing pages should be initialized to the current
-- time so they don't needlessly rerender until they are
-- changed for the first time:

UPDATE /*$wgDBprefix*/cur
  SET cur_touched=NOW()+0;

-- wiki_user_touched should be set to the current time whenever:
--  * the wiki_user logs in
--  * the wiki_user saves preferences (if no longer default...?)
--  * the wiki_user's newtalk status is altered
--
-- The wiki_user_touched time should also be checked against the
-- timestamp reported by a browser requesting revalidation.
-- If wiki_user_touched is later than the reported last modified
-- time, the page should be rerendered with new options and
-- sent again.

ALTER TABLE /*$wgDBprefix*/wiki_user
  ADD COLUMN wiki_user_touched binary(14) NOT NULL default '';
UPDATE /*$wgDBprefix*/wiki_user
  SET wiki_user_touched=NOW()+0;
