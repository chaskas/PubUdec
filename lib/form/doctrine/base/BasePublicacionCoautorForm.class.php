<?php

/**
 * PublicacionCoautor form base class.
 *
 * @method PublicacionCoautor getObject() Returns the current form's model object
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublicacionCoautorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'publicacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'), 'add_empty' => false)),
      'coautor_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Autor'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'publicacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'))),
      'coautor_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Autor'))),
    ));

    $this->widgetSchema->setNameFormat('publicacion_coautor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PublicacionCoautor';
  }

}
