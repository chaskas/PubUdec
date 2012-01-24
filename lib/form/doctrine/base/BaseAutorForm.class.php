<?php

/**
 * Autor form base class.
 *
 * @method Autor getObject() Returns the current form's model object
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'apellido'     => new sfWidgetFormInputText(),
      'titulo'       => new sfWidgetFormInputText(),
      'direccion'    => new sfWidgetFormInputText(),
      'departamento' => new sfWidgetFormInputText(),
      'facultad'     => new sfWidgetFormInputText(),
      'universidad'  => new sfWidgetFormInputText(),
      'ciudad'       => new sfWidgetFormInputText(),
      'pais'         => new sfWidgetFormInputText(),
      'fono'         => new sfWidgetFormInputText(),
      'fax'          => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'slug'         => new sfWidgetFormInputText(),
      'foto'         => new sfWidgetFormInputText(),
      'foto_x1'      => new sfWidgetFormInputText(),
      'foto_y1'      => new sfWidgetFormInputText(),
      'foto_x2'      => new sfWidgetFormInputText(),
      'foto_y2'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorPass(),
      'apellido'     => new sfValidatorPass(),
      'titulo'       => new sfValidatorPass(array('required' => false)),
      'direccion'    => new sfValidatorPass(array('required' => false)),
      'departamento' => new sfValidatorPass(array('required' => false)),
      'facultad'     => new sfValidatorPass(array('required' => false)),
      'universidad'  => new sfValidatorPass(array('required' => false)),
      'ciudad'       => new sfValidatorPass(array('required' => false)),
      'pais'         => new sfValidatorPass(array('required' => false)),
      'fono'         => new sfValidatorPass(array('required' => false)),
      'fax'          => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto_x1'      => new sfValidatorInteger(array('required' => false)),
      'foto_y1'      => new sfValidatorInteger(array('required' => false)),
      'foto_x2'      => new sfValidatorInteger(array('required' => false)),
      'foto_y2'      => new sfValidatorInteger(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Autor', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('autor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Autor';
  }

}
