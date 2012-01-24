<?php

/**
 * Autor form.
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AutorForm extends BaseAutorForm {

  public function configure() {
    $this->getObject()->configureJCropWidgets($this);
    $this->getObject()->configureJCropValidators($this);

    $this->validatorSchema['nombre'] = new sfValidatorString(array('required' => true));
    $this->validatorSchema['apellido'] = new sfValidatorString(array('required' => true));
    $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->widgetSchema->setNameFormat('autor[%s]');
    $this->widgetSchema->setFormFormatterName('list');
    
    $errorRowFormat = "<span style='color:red;'>Inv&aacute;lido</span>";
    $this->getWidgetSchema()->getFormFormatter()->setErrorListFormatInARow($errorRowFormat);
  }

}
