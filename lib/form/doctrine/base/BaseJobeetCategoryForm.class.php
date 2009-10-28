<?php

/**
 * JobeetCategory form base class.
 *
 * @package    form
 * @subpackage jobeet_category
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseJobeetCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'name'                   => new sfWidgetFormInput(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'slug'                   => new sfWidgetFormInput(),
      'jobeet_affiliates_list' => new sfWidgetFormDoctrineChoiceMany(array('model' => 'JobeetAffiliate')),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorDoctrineChoice(array('model' => 'JobeetCategory', 'column' => 'id', 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 255)),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
      'updated_at'             => new sfValidatorDateTime(array('required' => false)),
      'slug'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'jobeet_affiliates_list' => new sfValidatorDoctrineChoiceMany(array('model' => 'JobeetAffiliate', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'JobeetCategory', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('jobeet_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetCategory';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['jobeet_affiliates_list']))
    {
      $this->setDefault('jobeet_affiliates_list', $this->object->JobeetAffiliates->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveJobeetAffiliatesList($con);
  }

  public function saveJobeetAffiliatesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['jobeet_affiliates_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (is_null($con))
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->JobeetAffiliates->getPrimaryKeys();
    $values = $this->getValue('jobeet_affiliates_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('JobeetAffiliates', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('JobeetAffiliates', array_values($link));
    }
  }

}
