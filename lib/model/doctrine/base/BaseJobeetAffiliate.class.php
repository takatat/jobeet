<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseJobeetAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_affiliate');
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('JobeetCategory as JobeetCategories', array(
             'refClass' => 'JobeetCategoryAffiliate',
             'local' => 'affiliate_id',
             'foreign' => 'category_id'));

        $this->hasMany('JobeetCategoryAffiliate', array(
             'local' => 'id',
             'foreign' => 'affiliate_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}