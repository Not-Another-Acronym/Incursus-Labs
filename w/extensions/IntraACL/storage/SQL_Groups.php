<?php

/**
 * Copyright (c) 2010+,
 *   Vitaliy Filippov <vitalif[d.o.g]mail.ru>
 *   Stas Fomin <stas.fomin[d.o.g]yandex.ru>
 *
 * This file is part of IntraACL MediaWiki extension
 * http://wiki.4intra.net/IntraACL
 *
 * Loosely based on HaloACL (c) 2009, ontoprise GmbH
 *
 * The IntraACL-Extension is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The IntraACL-Extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class IntraACL_SQL_Groups
{
    private function getUsersForGroup($sql, $sql_wiki, $groupId)
    {
	global $my_debug;
	if($my_debug)
                print("DEBUG - getUsersForGroup");
	$users = array();
	$groupId = $this->WIKItoPHPB($groupId, $sql_wiki, $sql);
        $qry=mysql_query("SELECT phpbb_users.username FROM phpbb_user_group LEFT JOIN phpbb_users ON phpbb_user_group.user_id = phpbb_users.user_id WHERE phpbb_user_group.group_id = " . $groupId, $sql);
	while($row = mysql_fetch_assoc($qry))
	    $users[] = $row["username"];
	return implode($users, ",");
    }
    private function WIKItoPHPB($groupID, $fresMySQLConnection_wiki, $fresMySQLConnection)
    {
	global $my_debug;
	if($my_debug)
                print("DEBUG - WIKItoPHPBB");
	$qry=mysql_query("SELECT page_title FROM page WHERE page_id = " . $groupID, $fresMySQLConnection_wiki);
	if(!($row = mysql_fetch_row($qry)))
		return -1;
	$title = explode("/", $row[0]);
	$title = $title[1];
	if($title == "")
		return -1;
	$qry=mysql_query("SELECT group_id FROM phpbb_groups WHERE group_name like '" . $title . "'", $fresMySQLConnection);
	$row = mysql_fetch_row($qry);
	return $row[0];
    }
    /**
     * Returns the name of the group with the ID $groupID.
     *
     * @param int $groupID
     *         ID of the group whose name is requested
     *
     * @return string
     *         Name of the group with the given ID or <NULL> if there is no such
     *         group defined in the database.
     */
    public function groupNameForID($groupID)
    {
	global $my_debug;
	if($my_debug)
                print("DEBUG - groupNameForID");
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
	$qry = mysql_query($qry, "SELECT group_id, group_name FROM phpbb_groups WHERE group_id = '" . $groupID . "'");
	$row = mysql_fetch_assoc($qry);
        return "Group/" . $row['group_name'];
    }

    /**
     * Saves the given group in the database.
     * @param HACLGroup $group
     *        This object defines the group that wil be saved.
     */
    public function saveGroup(HACLGroup $group)
    {
    }

    /**
     * Retrieves all groups from the database.
     * [name contains $text]
     * [name does not contain $nottext]
     * [maximum $limit]
     *
     * @return Array
     *         Array of Group Objects
     */
    public function getGroups($text = NULL, $nottext = NULL, $limit = NULL, $as_object = false)
    {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - getGroups");
	global $wgAuth;
	$fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
	$qry = "SELECT group_id, group_name FROM phpbb_groups WHERE ";

	if (strlen($text))
            $qry .= 'group_name LIKE \'%' . mysql_real_escape_string($text) . '%\' AND ';
	if (strlen($nottext))
	    $qry .= 'group_name NOT LIKE \'%' . mysql_real_escape_string($nottext) . '%\' AND ';
	$qry .= "TRUE ORDER BY group_name";
	if ($limit !== NULL)
	    $qry .= " LIMIT " . mysql_real_escape_string($limit);
	$qry = mysql_query($qry, $fresMySQLConnection);
	$groups = array();
	if ($as_object)
        {
            while($row = mysql_fetch_assoc($qry))
            {
	        $groups[] = new HACLGroup(
		    $row['group_id'],
		    "Group/" . $row['group_name'],
		    '',
		    $this->getUsersForGroup($fresMySQLConnection, $fresMySQLConnection_wiki, $row['group_id'])
		);
            }
        }
        else
        {
            while($row = mysql_fetch_assoc($qry))
            {
                $groups[] = array(
                    'group_id' => $row['group_id'],
		    'group_name' => "Group/" . $row['group_name'],
		    'mg_groups' => '',
		    'mg_users' => $this->getUsersForGroup($fresMySQLConnection, $fresMySQLConnection_wiki, $row['group_id'])
		);
            }
        }
        return $groups;
    }

    /**
     * Retrieves the description of the group with the name $groupName from
     * the database.
     *
     * @param string $groupName
     *         Name of the requested group.
     *
     * @return HACLGroup
     *         A new group object or <NULL> if there is no such group in the
     *         database.
     *
     */
    public function getGroupByName($groupName) {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - getGroupByName");
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
        $qry = mysql_query($qry, "SELECT group_id, group_name FROM phpbb_groups WHERE group_name = '" . $groupName . "'");
	$row = mysql_fetch_assoc($qry);
        return new HACLGroup(
                    $row['group_id'],
                    "Group/" . $row['group_name'],
                    '',
                    $this->getUsersForGroup($fresMySQLConnection, $fresMySQLConnection_wiki, $row['group_id'])
                );
    }

    /**
     * Retrieves the description of the group with the ID $groupID from
     * the database.
     *
     * @param int $groupID
     *         ID of the requested group.
     *
     * @return HACLGroup
     *         A new group object or <NULL> if there is no such group in the
     *         database.
     *
     */
    public function getGroupByID($groupID) {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - getGroupById");
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
	$groupID = $this->WIKItoPHPB($groupID, $fresMySQLConnection_wiki, $fresMySQLConnection);
        $qry = mysql_query("SELECT group_id, group_name FROM phpbb_groups WHERE group_id = " . $groupID, $fresMySQLConnection);
	$row = mysql_fetch_assoc($qry);
        return new HACLGroup(
                    $row['group_id'],
                    "Group/" . $row['group_name'],
                    '',
                    $this->getUsersForGroup($fresMySQLConnection, $fresMySQLConnection_wiki, $row['group_id'])
                );
    }

    /**
     * Adds the user with the ID $userID to the group with the ID $groupID.
     *
     * @param int $groupID
     *         The ID of the group to which the user is added.
     * @param int $userID
     *         The ID of the user who is added to the group.
     *
     */
    public function addUserToGroup($groupID, $userID) {
    }

    /**
     * Adds the group with the ID $childGroupID to the group with the ID
     * $parentGroupID.
     *
     * @param $parentGroupID
     *         The group with this ID gets the new child with the ID $childGroupID.
     * @param $childGroupID
     *         The group with this ID is added as child to the group with the ID
     *      $parentGroup.
     *
     */
    public function addGroupToGroup($parentGroupID, $childGroupID) {
    }

    /**
     * Removes the user with the ID $userID from the group with the ID $groupID.
     *
     * @param $groupID
     *         The ID of the group from which the user is removed.
     * @param int $userID
     *         The ID of the user who is removed from the group.
     *
     */
    public function removeUserFromGroup($groupID, $userID) {
    }

    /**
     * Removes all members from the group with the ID $groupID.
     *
     * @param $groupID
     *         The ID of the group from which the user is removed.
     *
     */
    public function removeAllMembersFromGroup($groupID) {
    }

    /**
     * Removes the group with the ID $childGroupID from the group with the ID
     * $parentGroupID.
     *
     * @param $parentGroupID
     *         This group loses its child $childGroupID.
     * @param $childGroupID
     *         This group is removed from $parentGroupID.
     *
     */
    public function removeGroupFromGroup($parentGroupID, $childGroupID) {
    }

    /**
     * Returns the IDs of all users or groups that are a member of the group
     * with the ID $groupID.
     *
     * @param string $memberType
     *         'user' => ask for all user IDs
     *         'group' => ask for all group IDs
     * @return array(int)
     *         List of IDs of all direct users or groups in this group.
     *
     */
    public function getMembersOfGroup($groupID, $memberType)
    {
        global $my_debug;
        if($my_debug)
                print("DEBUG - getMembersOfGroup");
	if($memberType = "group")
	    return array();
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
	$users = array();
        $qry=mysql_query("
		SELECT " . $GLOBALS['wgDBname'] . ".user.user_id FROM phpbb_user_group
			LEFT JOIN phpbb_users ON phpbb_user_group.user_id = phpbb_users.user_id
			LEFT JOIN " . $GLOBALS['wgDBname'] . ".user ON " . $GLOBALS['wgDBname'] . ".user.user_name = phpbb_users.username
			WHERE phpbb_user_group.group_id = " . $groupId);
        while($row = mysql_fetch_assoc($qry))
            $users[] = $row["user_id"];
        return $users;
    }

    /**
     * Massively retrieve members of groups with IDs $ids
     */
    public function getMembersOfGroups($ids)
    {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - getMembersOfGroup");
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
        $users = array();
        $qry=mysql_query("
                SELECT " . $GLOBALS['wgDBname'] . ".user.user_id, phpbb_user_group.group_id FROM phpbb_user_group
                        LEFT JOIN phpbb_users ON phpbb_user_group.user_id = phpbb_users.user_id
                        LEFT JOIN " . $GLOBALS['wgDBname'] . ".user ON " . $GLOBALS['wgDBname'] . ".user.user_name = phpbb_users.username
                        WHERE phpbb_user_group.group_id IN (" . implode(",", $ids) . ")");
	$members = array();
        while($row = mysql_fetch_assoc($qry))
            $members[$row["group_id"]]["user"] = $row["user_id"];
        return $members;
    }

    /**
     * Returns all groups the user is member of
     *
     * @param  string $memberType: 'user' or 'group'
     * @param  int $memberID: ID of asked user or group
     * @param  boolean $recurse: recursive or no
     * @return array(int): parent group IDs
     */
    public function getGroupsOfMember($memberType, $memberID, $recurse = true)
    {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - getGroupsOfMember");
	if($memberType == 'group')
		return array();
	global $wgAuth;
        $fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
        $users = array();
        $qry=mysql_query("
                SELECT phpbb_user_group.group_id FROM phpbb_user_group
                        LEFT JOIN phpbb_users ON phpbb_user_group.user_id = phpbb_users.user_id
                        LEFT JOIN " . $GLOBALS['wgDBname'] . ".user ON " . $GLOBALS['wgDBname'] . ".user.user_name = phpbb_users.username
                        WHERE " . $GLOBALS['wgDBname'] . ".user.user_id = '" . mysql_real_escape_string($memberID) . "';");
        $grps = array();
        while($row = mysql_fetch_assoc($qry))
            $grps[] = $row["group_id"];
        return $grps;
    }

    /**
     * Checks if the given user or group with the ID $childID belongs to the
     * group with the ID $parentID.
     *
     * @param int $parentID
     *         ID of the group that is checked for a member.
     *
     * @param int $childID
     *         ID of the group or user that is checked for membership.
     *
     * @param string $memberType
     *         HACLGroup::USER  : Checks for membership of a user
     *         HACLGroup::GROUP : Checks for membership of a group
     *
     * @param bool recursive
     *         <true>, checks recursively among all children of this $parentID if
     *                 $childID is a member
     *         <false>, checks only if $childID is an immediate member of $parentID
     *
     * @return bool
     *         <true>, if $childID is a member of $parentID
     *         <false>, if not
     *
     */
    public function hasGroupMember($parentID, $childID, $memberType, $recursive)
    {
	
        global $my_debug;
        if($my_debug)
                print("DEBUG - hasGroupMember($parentID, $childID, $memberType, $recursive)\n");
	if($memberType == "user")
	{
		global $wgAuth;
        	$fresMySQLConnection_wiki = null;
	        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
		$qry=mysql_query("
			SELECT " . $GLOBALS['wgDBname'] . ".user.user_id FROM " . $GLOBALS['wgDBname'] . ".page
				LEFT JOIN " . $GLOBALS['wgAuth_Config']['MySQL_Database'] . ".phpbb_groups ON substr(page.page_title, 7) = phpbb_groups.group_name
				LEFT JOIN " . $GLOBALS['wgAuth_Config']['MySQL_Database'] . ".phpbb_user_group ON phpbb_user_group.group_id = phpbb_groups.group_id
				LEFT JOIN " . $GLOBALS['wgAuth_Config']['MySQL_Database'] . ".phpbb_users ON phpbb_user_group.user_id = phpbb_users.user_id
				LEFT JOIN " . $GLOBALS['wgDBname'] . ".user ON LOWER(CONVERT(user.user_name USING utf8)) LIKE LOWER(phpbb_users.loginname)
				WHERE 
				  " . $GLOBALS['wgDBname'] . ".page.page_id = " . $parentID . " AND
				  " . $GLOBALS['wgDBname'] . ".user.user_id = " . $childID
		, $fresMySQLConnection);
		$retval = mysql_fetch_row($qry);
		if($my_debug)
			print($retval . " " . ($retval?"true\n":"false\n"));
		return $retval;
	}
        return false;
    }

    public function getGroupMembersRecursive($groupID, $children = array())
    {
	global $my_debug;
	if($my_debug)
		throw  new Exception("getGroupMembersRecursive");
	/* TODO */
        if (!isset($children['user']))
            $children['user'] = array();
        if (!isset($children['group']))
            $children['group'] = array();
        $dbr = wfGetDB(DB_SLAVE);
        while ($groupID)
        {
            $r = $dbr->select('halo_acl_group_members',
                'child_type, child_id',
                array('parent_group_id' => $groupID),
                __METHOD__);
            $groupID = array();
            while ($obj = $dbr->fetchRow($r))
            {
                if (!$children[$obj[0]][$obj[1]])
                {
                    $children[$obj[0]][$obj[1]] = true;
                    if ($obj[0] == 'group')
                        $groupID[] = $obj[1];
                }
            }
        }
        return $children;
    }

    /**
     * Massively retrieves IntraACL groups with $group_ids from the DB
     * If $group_ids is NULL, retrieves ALL groups
     * @return array(group_id => row)
     */
    public function getGroupsByIds($group_ids)
    {
	global $my_debug;
	if($my_debug)
		throw  new Exception("getGroupsByIds");
	/* TODO */
        if (!$group_ids)
            return array();
        $dbr = wfGetDB(DB_SLAVE);
        $rows = array();
        $res = $dbr->select('halo_acl_groups', '*', is_null($group_ids) ? '1' : array('group_id' => $group_ids), __METHOD__);
        foreach ($res as $r)
            $rows[$r->group_id] = $r;
        return $rows;
    }

    /**
     * Deletes the group with the ID $groupID from the database. All references
     * to the group in the hierarchy of groups are deleted as well.
     *
     * However, the group is not removed from any rights, security descriptors etc.
     * as this would mean that articles will have to be changed.
     *
     *
     * @param int $groupID
     *         ID of the group that is removed from the database.
     *
     */
    public function deleteGroup($groupID) {
    }

    /**
     * Checks if the group with the ID $groupID exists in the database.
     *
     * @param int $groupID
     *         ID of the group
     *
     * @return bool
     *         <true> if the group exists
     *         <false> otherwise
     */
    public function groupExists($groupID)
    {
	global $my_debug;
	if($my_debug)
		print("DEBUG - groupExists");
	global $wgAuth;
	$fresMySQLConnection_wiki = null;
        $fresMySQLConnection = $wgAuth->connect($fresMySQLConnection_wiki);
        $qry = mysql_query("SELECT group_id, group_name FROM phpbb_groups WHERE group_id = '" . $groupID . "'", $fresMySQLConnection);
	if($row = mysql_fetch_assoc($qry))
	    return true;
	else
	    return false;
    }
}
