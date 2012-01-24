<?php

/**
 * Publicacion form base class.
 *
 * @method Publicacion getObject() Returns the current form's model object
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublicacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'titulo'      => new sfWidgetFormInputText(),
      'tipo_pub_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo'), 'add_empty' => true)),
      'autor_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Autor'), 'add_empty' => false)),
      'estado'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'      => new sfValidatorPass(),
      'tipo_pub_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo'), 'required' => false)),
      'autor_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Autor'))),
      'estado'      => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('publicacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Publicacion';
  }

}
