<?php

class BuscadorForm extends sfForm {

  public function configure() {
    
    sfContext::getInstance()->getConfiguration()->loadHelpers(array('Url'));
    


    $this->widgetSchema['autor']   = new sfWidgetFormDoctrineJQueryAutocompleter(array(
	  'model' => 'Autor',
	  'url'   => url_for('dashboard/ajax'),
          'label' => 'Autor' ,
	  'config' => '{ width: 252,max: 20,multiple: false,multipleSeparator: ",",scroll: true,scrollHeight: 300}'
	));
    

//    $this->widgetSchema['autor'] = new sfWidgetFormInputText();
    $this->widgetSchema['tipo'] = new sfWidgetFormDoctrineChoice(array('model' => 'Tipo', 'table_method' => 'getTipos', 'add_empty' => true));
    $this->widgetSchema['desde'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/fugue/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['desde']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['hasta'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/fugue/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['hasta']->getOption('date_widget')->setOption('format', '%day%%month%%year%');


    $this->validatorSchema['autor'] = new sfValidatorString(array('required' => true));
    $this->validatorSchema['tipo'] = new sfValidatorString(array('required' => false));
    $this->validatorSchema['desde'] = new sfValidatorString(array('required' => false));
    $this->validatorSchema['hasta'] = new sfValidatorString(array('required' => false));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->widgetSchema->setNameFormat('%s');
    $this->widgetSchema->setFormFormatterName('list');

    $errorRowFormat = "<span style='color:red;'>Inv&aacute;lido</span>";
    $this->getWidgetSchema()->getFormFormatter()->setErrorListFormatInARow($errorRowFormat);
  }

}
