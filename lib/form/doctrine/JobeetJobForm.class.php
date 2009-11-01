<?php

/**
 * JobeetJob form.
 *
 * @package    form
 * @subpackage JobeetJob
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at'],
      $this['expires_at'], $this['is_activated'],
      $this['token']
    );

    $this->widgetSchema->setLabels(array(
      'category_id'    => 'Category',
      'is_public'      => 'Public?',
      'how_to_apply'   => 'How to apply?',
    ));

    $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine::getTable('JobeetJob')->getTypes(),
      'expanded' => true,
    ));

    $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
      'label' => 'Company logo',
    ));

    $this->validatorSchema['type'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine::getTable('JobeetJob')->getTypes()),
    ));

    $this->validatorSchema['logo'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/jobs',
      'mime_types' => 'web_images',
    ));

    $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));

    $this->widgetSchema->setHelp('is_public', 'Whether the job can also be published on affiliate websites or not.');

    $this->widgetSchema->setNameFormat('job[%s]');

    $this->validatorSchema->setOption('allow_extra_fields', false);
  }
}
