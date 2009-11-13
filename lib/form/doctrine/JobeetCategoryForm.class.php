<?php

/**
 * JobeetCategory form.
 *
 * @package    form
 * @subpackage JobeetCategory
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class JobeetCategoryForm extends BaseJobeetCategoryForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at'], $this['jobeet_affiliates_list']);
 
    $this->embedI18n(array('en', 'fr'));
    $this->widgetSchema->setLabel('en', 'English');
    $this->widgetSchema->setLabel('fr', 'French');
  }
}