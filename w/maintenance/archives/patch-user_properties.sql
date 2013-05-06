--
-- wiki_user preferences and perhaps other fun stuff. :)
-- Replaces the old wiki_user.wiki_user_options blob, with a couple nice properties:
--
-- 1) We only store non-default settings, so changes to the defauls
--    are now reflected for everybody, not just new accounts.
-- 2) We can more easily do bulk lookups, statistics, or modifications of
--    saved options since it's a sane table structure.
--
CREATE TABLE /*_*/wiki_user_properties(
  -- Foreign key to wiki_user.wiki_user_id
  up_wiki_user int not null,
  
  -- Name of the option being saved. This is indexed for bulk lookup.
  up_property varbinary(32) not null,
  
  -- Property value as a string.
  up_value blob
) /*$wgDBTableOptions*/;

CREATE UNIQUE INDEX /*i*/wiki_user_properties_wiki_user_property on /*_*/wiki_user_properties (up_wiki_user,up_property);
CREATE INDEX /*i*/wiki_user_properties_property on /*_*/wiki_user_properties (up_property);
