<?php

/**
 * PublicacionCoautor filter form base class.
 *
 * @package    pubudec
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePublicacionCoautorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'publicacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'), 'add_empty' => true)),
      'coautor_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Autor'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'publicacion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Publicacion'), 'column' => 'id')),
      'coautor_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Autor'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('publicacion_coautor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PublicacionCoautor';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'publicacion_id' => 'ForeignKey',
      'coautor_id'     => 'ForeignKey',
    );
  }
}
