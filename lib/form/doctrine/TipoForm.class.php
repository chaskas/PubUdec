<?php

/**
 * Tipo form.
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TipoForm extends BaseTipoForm
{
  public function configure()
  {
    $this->validatorSchema['nombre']     = new sfValidatorString();
    $errorRowFormat = "<span style='color:red;'>No v&aacute;lido</span>";
    $this->getWidgetSchema()->getFormFormatter()->setErrorListFormatInARow($errorRowFormat);
  }
}
