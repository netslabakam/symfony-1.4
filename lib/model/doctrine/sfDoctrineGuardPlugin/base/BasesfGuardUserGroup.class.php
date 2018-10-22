<?php

/**
 * BasesfGuardUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $group_id
 * @property sfGuardUser $User
 * @property sfGuardGroup $Group
 * 
 * @method integer          getUserId()   Returns the current record's "user_id" value
 * @method integer          getGroupId()  Returns the current record's "group_id" value
 * @method sfGuardUser      getUser()     Returns the current record's "User" value
 * @method sfGuardGroup     getGroup()    Returns the current record's "Group" value
 * @method sfGuardUserGroup setUserId()   Sets the current record's "user_id" value
 * @method sfGuardUserGroup setGroupId()  Sets the current record's "group_id" value
 * @method sfGuardUserGroup setUser()     Sets the current record's "User" value
 * @method sfGuardUserGroup setGroup()    Sets the current record's "Group" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Farrukh Umurzakov
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasesfGuardUserGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user_group');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}