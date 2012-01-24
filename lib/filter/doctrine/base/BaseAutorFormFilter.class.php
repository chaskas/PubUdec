<?php

/**
 * Autor filter form base class.
 *
 * @package    pubudec
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAutorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'titulo'       => new sfWidgetFormFilterInput(),
      'direccion'    => new sfWidgetFormFilterInput(),
      'departamento' => new sfWidgetFormFilterInput(),
      'facultad'     => new sfWidgetFormFilterInput(),
      'universidad'  => new sfWidgetFormFilterInput(),
      'ciudad'       => new sfWidgetFormFilterInput(),
      'pais'         => new sfWidgetFormFilterInput(),
      'fono'         => new sfWidgetFormFilterInput(),
      'fax'          => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'         => new sfWidgetFormFilterInput(),
      'foto'         => new sfWidgetFormFilterInput(),
      'foto_x1'      => new sfWidgetFormFilterInput(),
      'foto_y1'      => new sfWidgetFormFilterInput(),
      'foto_x2'      => new sfWidgetFormFilterInput(),
      'foto_y2'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'apellido'     => new sfValidatorPass(array('required' => false)),
      'titulo'       => new sfValidatorPass(array('required' => false)),
      'direccion'    => new sfValidatorPass(array('required' => false)),
      'departamento' => new sfValidatorPass(array('required' => false)),
      'facultad'     => new sfValidatorPass(array('required' => false)),
      'universidad'  => new sfValidatorPass(array('required' => false)),
      'ciudad'       => new sfValidatorPass(array('required' => false)),
      'pais'         => new sfValidatorPass(array('required' => false)),
      'fono'         => new sfValidatorPass(array('required' => false)),
      'fax'          => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'slug'         => new sfValidatorPass(array('required' => false)),
      'foto'         => new sfValidatorPass(array('required' => false)),
      'foto_x1'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foto_y1'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foto_x2'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foto_y2'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('autor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Autor';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre'       => 'Text',
      'apellido'     => 'Text',
      'titulo'       => 'Text',
      'direccion'    => 'Text',
      'departamento' => 'Text',
      'facultad'     => 'Text',
      'universidad'  => 'Text',
      'ciudad'       => 'Text',
      'pais'         => 'Text',
      'fono'         => 'Text',
      'fax'          => 'Text',
      'email'        => 'Text',
      'slug'         => 'Text',
      'foto'         => 'Text',
      'foto_x1'      => 'Number',
      'foto_y1'      => 'Number',
      'foto_x2'      => 'Number',
      'foto_y2'      => 'Number',
    );
  }
}
