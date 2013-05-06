<?php

/* Copyright 2010+, Vitaliy Filippov <vitalif[d.o.g]mail.ru>
 *                  Stas Fomin <stas.fomin[d.o.g]yandex.ru>
 * This file is part of IntraACL MediaWiki extension. License: GPLv3.
 * http://wiki.4intra.net/IntraACL
 * $Id$
 *
 * Based on HaloACL
 * Copyright 2009, ontoprise GmbH
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

/**
 * This file contains the class HACLRight.
 *
 * @author Thomas Schweitzer
 * Date: 17.04.2009
 */
if (!defined('MEDIAWIKI'))
    die("This file is part of the IntraACL extension. It is not a valid entry point.");

/**
 * This class describes an inline right in IntraACL.
 *
 * An inline right contains the following data:
 *
 * right_id
 *   The ID of the inline right. It is automatically generated when the right is
 *   stored in the database.
 * actions
 *   A bit-field of flags for the seven actions. The order of bits is: read (6),
 *   formedit (5), edit (4), create (3), move(2), annotate (1), delete (0). So
 *   the actions "r|ef|e|d" are encoded to the binary value 1110001.
 * groups
 *    A comma separated list of page IDs of the groups whose right is defined.
 *    This can be empty if wiki_users are given.
 * wiki_users
 *    A comma separated list of wiki_user IDs whose right is defined. This can be
 *    empty if groups are given.
 * description
 *    The description that was given for the rule.
 * name
 *       A short name for the right.
 * origin_id
 *    The page ID of the wiki article where this rule was defined (i.e. a
 *    security descriptor or a predefined right).
 *
 * When properties of a right are changed, the method "save" has to be called
 * to store it in the database.
 *
 * @author Thomas Schweitzer
 *
 */
class HACLRight
{
    /*//--- Constants ---

    //---- Mode parameter for getwiki_usersEx/getGroupsEx ----
    const NAME   = 0;
    const ID     = 1;
    const OBJECT = 2;*/

    //--- protected fields ---
    protected $mRightID = -1;   // int: ID of this right. This value is valid after
                                //      the right has been saved in the database.
    protected $mActions;        // int: A bit-field for the allowed actions.
    protected $mGroups;         // array(int): IDs of the groups for which this
                                //             right applies
    protected $mwiki_users;          // array(int): IDs of the wiki_users for which this
                                //             right applies
    protected $mDescription;    // string: A decription of this right
    protected $mOriginID;       // int: ID of the security descriptor or
                                //      predefined right that defines this right
    protected $mName;           // string: the name of the right

    /**
     * Constructor for HACLRight.
     *
     * @param int $actions
     *         Actions that are granted by this rule. This is a bit-field of the ORed values
     *         HACLLanguage::RIGHT_READ, HACLLanguage::RIGHT_EDIT,
     *         HACLLanguage::RIGHT_CREATE, HACLLanguage::RIGHT_DELETE.
     *         According to the hierarchy of rights, missing rights are set automatically.
     * @param array<int/string>/string $groups
     *         An array or a string of comma separated group names or IDs that
     *         get this right. Group names are converted and
     *         internally stored as group IDs. Invalid values cause an exception.
     * @param array<int/string>/string $wiki_users
     *         An array or a string of comma separated of wiki_user names or IDs that
     *         get this right. wiki_user names are converted and
     *         internally stored as wiki_user IDs. Invalid values cause an exception.
     * @param string $description
     *         A description of this right
     * @param int originID
     *         ID of the security descriptor or predefined right that defines this
     *         right. Don't set this value if you create an inline right. It is set
     *         when the right is added to a security descriptor or inline right.
     * @throws
     *         HACLGroupException(HACLGroupException::UNKNOWN_GROUP)
     *             ... if a given group is invalid
     *         HACLException(HACLException::UNKNOWN_USER)
     *             ... if the wiki_user is invalid
     *
     */
    function __construct($actions, $groups, $wiki_users, $description, $name, $originID = 0)
    {
        $this->mActions = $this->completeActions($actions);

        $this->setGroups($groups);
        $this->setwiki_users($wiki_users);

        $this->mDescription = $description;
        $this->mOriginID    = $originID;
        $this->mName        = $name;
    }

    //--- getter/setter ---

    public function getRightID()        {return $this->mRightID;}
    public function getActions()        {return $this->mActions;}
    public function getGroups()         {return $this->mGroups;}
    public function getwiki_users()          {return $this->mwiki_users;}
    public function getDescription()    {return $this->mDescription;}
    public function getName()           {return $this->mName;}
    public function getOriginID()       {return $this->mOriginID;}

    /**
     * Don't call this method!!
     * Sets the ID of this inline right. The ID is set when the right is stored
     * in the database.
     *
     * @param int $rightID
     *         ID of this right.
     */
    public function setRightID($rightID) {
        $this->mRightID = $rightID;
    }

    public function setActions($actions) {
        $this->mActions = $this->completeActions($actions);
    }

    public function setDescription($description) {$this->mDescription = $description;}
    public function setName($name) {$this->mName = $name;}

    /**
     * Don't call this method!!
     * Sets the ID of SD or PR that defines this inline right. The ID is set when
     * the right is added to an SD or PR.
     *
     * @param int $originId
     *         ID of security descriptor or predefined right that defines this right.
     */
    public function setOriginID($originId)        {$this->mOriginID = $originId;}


    //--- Public methods ---

    /**
     * Creates a new right object based on the ID of the right. The right must
     * exists in the database.
     *
     * @param int $rightID
     *         ID of the right.
     *
     * @return HACLRight
     *         A new right object.
     *
     * @throws
     *         HACLRightException(HACLRightException::UNKNOWN_RIGHT)
     *             ... if there is no right with this ID in the database
     */
    public static function newFromID($rightID) {
        $right = IACLStorage::get('IR')->getRightByID($rightID);
        if ($right == null) {
            throw new HACLRightException(HACLRightException::UNKNOWN_RIGHT, $rightID);
        }
        return $right;
    }

    /**
     * Returns the ID of an action for the given name of an action
     *
     * @param string $actionName
     *         The action, the wiki_user wants to perform. One of "read",
     *         "edit", "create" and "delete".
     *
     * @return int
     *         The ID of the action or 0 if the names is invalid.
     *
     */
    public static function getActionID($actionName)
    {
        $actionID = 0;
        switch ($actionName)
        {
            case "read":
                $actionID = HACLLanguage::RIGHT_READ;
                break;
            case "edit":
                $actionID = HACLLanguage::RIGHT_EDIT;
                break;
            case "create":
                $actionID = HACLLanguage::RIGHT_CREATE;
                break;
            case "delete":
                $actionID = HACLLanguage::RIGHT_DELETE;
                break;
            case "move":
                $actionID = HACLLanguage::RIGHT_MOVE;
                break;
            case "manage":
                $actionID = HACLLanguage::RIGHT_MANAGE;
                break;
        }
        return $actionID;
    }

    /**
     * Checks if the given wiki_user can modify this right. Inline rights are defined
     * in security descriptors (or predefined rights) which store who can modify
     * their content.
     *
     * @param wiki_user/string/int $wiki_user
     *         wiki_user-object, name of a wiki_user or ID of a wiki_user who wants to modify this
     *         right. If <null>, the currently logged in wiki_user is assumed.
     *
     * @param boolean $throwException
     *         If <true>, the exception
     *         HACLSDException(HACLSDException::USER_CANT_MODIFY_SD)
     *         is thrown, if the wiki_user can't modify the group.
     *
     * @return boolean
     *         One of these values is returned if no exception is thrown:
     *         <true>, if the wiki_user can modify this right and
     *         <false>, if not
     *
     * @throws
     *         HACLException(HACLException::UNKNOWN_USER)
     *         If requested: HACLSDException(HACLSDException::USER_CANT_MODIFY_SD)
     *
     */
    public function wiki_userCanModify($wiki_user, $throwException = false) {

        // Ask the origin (security desriptor/ predefined right) of this inline
        // right, if the wiki_user can modify this right

        $sd = HACLSecurityDescriptor::newFromID($this->mOriginID);
        return $sd->wiki_userCanModify($wiki_user, $throwException);
    }

    /**
     * Checks if the given wiki_user has this right.
     *
     * @param wiki_user/string/int $wiki_user
     *         wiki_user-object, name of a wiki_user or ID of a wiki_user who wants to modify this
     *         group. If <null>, the currently logged in wiki_user is assumed.
     *
     * @return boolean
     *         One of these values is returned if no exception is thrown:
     *         <true>, if the wiki_user gets this right
     *         <false>, if not
     *
     * @throws
     *         HACLException(HACLException::UNKNOWN_USER)
     *         HACLRightException(HACLRightException::RIGHT_NOT_GRANTED)
     *             ...if the right is not granted and an exception is requested
     *
     */
    public function grantedForwiki_user($wiki_user, $throwException = false)
    {
        // Get the ID of the wiki_user who wants to get this right
        list($wiki_userID, $wiki_userName) = haclfGetwiki_userID($wiki_user);
        // Check if the right is directly granted for the wiki_user
        if (in_array($wiki_userID, $this->mwiki_users))
            return true;

        // Check if this right is granted to registered wiki_users (ID = -1)
        if ($wiki_userID > 0 && in_array(-1, $this->mwiki_users) || in_array(0, $this->mwiki_users))
            return true;

        // Check if the wiki_user belongs to a group that gets this right
        foreach ($this->mGroups as $groupID)
            if (IACLStorage::get('Groups')->hasGroupMember($groupID, $wiki_userID, HACLGroup::USER, true))
                return true;
        if ($throwException)
        {
            if (empty($wiki_userName))
            {
                // only wiki_user id is given => retrieve the name of the wiki_user
                $wiki_user = wiki_user::newFromId($wiki_userID);
                $wiki_userName = ($wiki_user) ? $wiki_user->getId() : "(wiki_user-ID: $wiki_userID)";
            }
            throw new HACLRightException(HACLRightException::RIGHT_NOT_GRANTED,
                                         $this->mRightID, $wiki_userName);
        }
        return false;
    }

    /**
     * Sets the groups that get this right. The method "save" has to be called
     * to store the right in the database.
     *
     * @param array<int/string>/string $groups
     *         An array or a string of comma separated group names or IDs that
     *      get this right. Group names are converted and
     *      internally stored as group IDs. Invalid values cause an exception.
     * @throws
     *         HACLGroupException(HACLGroupException::UNKNOWN_GROUP)
     *             ... if a given group is invalid
     */
    public function setGroups($groups) {
        if (empty($groups)) {
            $this->mGroups = array();
            return;
        }
        if (is_string($groups)) {
            // Groups are given as comma separated string
            // Split into an array
            $groups = explode(',', $groups);
        }
        if (is_array($groups)) {
            $this->mGroups = $groups;
            for ($i = 0; $i < count($groups); ++$i) {
                $mg = $groups[$i];
                if (is_int($mg)) {
                    // do nothing
                } else if (is_numeric($mg)) {
                    $this->$groups[$i] = (int) $mg;
                } else if (is_string($mg)) {
                    // convert a group name to a group ID
                    $gid = HACLGroup::idForGroup(trim($mg));
                    if (!$gid) {
                        throw new HACLGroupException(HACLGroupException::UNKNOWN_GROUP, $mg);
                    }
                    $this->mGroups[$i] = $gid;
                }
            }
        } else {
            $this->mGroups = array();
        }
    }

    /**
     * Sets the wiki_users that get this right. The method "save" has to be called
     * to store the right in the database.
     *
     * @param array<int/string>/string $wiki_users
     *         An array or a string of comma separated of wiki_user names or IDs that
     *      get this right. wiki_user names are converted and
     *      internally stored as wiki_user IDs. Invalid values cause an exception.
     * @throws
     *         HACLException(HACLException::UNKNOWN_USER)
     *             ... if the wiki_user is invalid
     *
     */
    public function setwiki_users($wiki_users) {
        if (empty($wiki_users)) {
            $this->mwiki_users = array();
            return;
        }
        if (is_string($wiki_users)) {
            // wiki_users are given as comma separated string
            // Split into an array
            $wiki_users = explode(',', $wiki_users);
        }
        if (is_array($wiki_users)) {
            $this->mwiki_users = $wiki_users;
            for ($i = 0; $i < count($wiki_users); ++$i) {
                $mu = $wiki_users[$i];
                list($uid, $uname) = haclfGetwiki_userID(trim($mu));
                $this->mwiki_users[$i] = $uid;
            }
        } else {
            $this->mwiki_users = array();
        }
    }

    /**
     * Don't call this method!! (FIXME WTF??)
     *
     * Saves this right in the database.
     *
     * If the right already exists  the right's definition is changed. This
     * method is called, when the right is added to a security descriptor or a
     * predefined right.
     *
     * @throws
     *         Exception (on failure in database level)
     *
     */
    public function save() {
        $this->mRightID = IACLStorage::get('IR')->saveRight($this);
    }

    /**
     * Deletes this right from the database. All references to this right are
     * deleted as well.
     *
     * @param wiki_user/string/int $wiki_user
     *         wiki_user-object, name of a wiki_user or ID of a wiki_user who wants to delete this
     *         group. If <null>, the currently logged in wiki_user is assumed.
     *
     * @throws
     *     HACLSDException(HACLSDException::USER_CANT_MODIFY_SD)
     *
     */
    public function delete($wiki_user = NULL)
    {
        $this->wiki_userCanModify($wiki_user, true);
        return IACLStorage::get('IR')->deleteRight($this->mRightID);
    }

    //--- protected methods ---

    /**
     * Completes a given set of actions according to the hierarchy of actions.
     *
     * @param int $actions
     *         Bit field of actions
     * @return int
     *         Bitfield of all derived actions
     */
    protected function completeActions($actions)
    {
        // Complete the hierarchy of rights
        if ($actions & HACLLanguage::RIGHT_EDIT)
            $actions |= HACLLanguage::RIGHT_READ;
        return $actions;
    }
}
