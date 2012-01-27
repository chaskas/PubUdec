<?php

/**
 * Publicacion form.
 *
 * @package    pubudec
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PublicacionForm extends BasePublicacionForm {

  public function configure() {
    $this->widgetSchema['estado'] = new sfWidgetFormChoice(array(
                'choices' => Doctrine_Core::getTable('Publicacion')->getEstados(),
                'expanded' => true,
            ));

    $this->widgetSchema['autor_id'] = new sfWidgetFormInputHidden();

    $this->widgetSchema['coautores'] = new sfWidgetFormTextarea();

    $years = range(date('Y') - 50, date('Y'));

    $this->widgetSchema['created_at'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/fugue/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['created_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['updated_at'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/fugue/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['updated_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');

    $this->validatorSchema['estado'] = new sfValidatorChoice(array(
                'choices' => array_keys(Doctrine_Core::getTable('Publicacion')->getEstados())
            ));

    $this->widgetSchema->setLabels(array(
        'titulo' => 'T&iacute;tulo',
        'tipo_pub_id' => 'Tipo',
        'created_at' => 'Fecha Publicaci&oacute;n',
        'updated_at' => 'Fecha Publicaci&oacute;n',
    ));

    $this->validatorSchema['titulo'] = new sfValidatorString();
    $this->validatorSchema['autor_id'] = new sfValidatorString();
    $this->validatorSchema['tipo_pub_id'] = new sfValidatorInteger();
    $this->validatorSchema['estado'] = new sfValidatorString();
    $this->validatorSchema['created_at'] = new sfValidatorDate();
//    $this->validatorSchema['updated_at'] = new sfValidatorDate(array('required' => false));
    $this->validatorSchema['coautores'] = new sfValidatorString();

    unset(
            $this['updated_at']
    );

    $errorRowFormat = "<span style='color:red;'>No v&aacute;lido</span>";
    $this->getWidgetSchema()->getFormFormatter()->setErrorListFormatInARow($errorRowFormat);
  }

}
