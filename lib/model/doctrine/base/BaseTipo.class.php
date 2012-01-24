<?php

/**
 * BaseTipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $nombre
 * @property Doctrine_Collection $Publicaciones
 * 
 * @method text                getNombre()        Returns the current record's "nombre" value
 * @method Doctrine_Collection getPublicaciones() Returns the current record's "Publicaciones" collection
 * @method Tipo                setNombre()        Sets the current record's "nombre" value
 * @method Tipo                setPublicaciones() Sets the current record's "Publicaciones" collection
 * 
 * @package    pubudec
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo');
        $this->hasColumn('nombre', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Publicacion as Publicaciones', array(
             'local' => 'id',
             'foreign' => 'tipo_pub_id'));
    }
}