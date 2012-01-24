<?php

/**
 * BasePublicacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $titulo
 * @property integer $tipo_pub_id
 * @property integer $autor_id
 * @property integer $estado
 * @property Autor $Autor
 * @property Tipo $Tipo
 * @property Doctrine_Collection $Coautores
 * 
 * @method text                getTitulo()      Returns the current record's "titulo" value
 * @method integer             getTipoPubId()   Returns the current record's "tipo_pub_id" value
 * @method integer             getAutorId()     Returns the current record's "autor_id" value
 * @method integer             getEstado()      Returns the current record's "estado" value
 * @method Autor               getAutor()       Returns the current record's "Autor" value
 * @method Tipo                getTipo()        Returns the current record's "Tipo" value
 * @method Doctrine_Collection getCoautores()   Returns the current record's "Coautores" collection
 * @method Publicacion         setTitulo()      Sets the current record's "titulo" value
 * @method Publicacion         setTipoPubId()   Sets the current record's "tipo_pub_id" value
 * @method Publicacion         setAutorId()     Sets the current record's "autor_id" value
 * @method Publicacion         setEstado()      Sets the current record's "estado" value
 * @method Publicacion         setAutor()       Sets the current record's "Autor" value
 * @method Publicacion         setTipo()        Sets the current record's "Tipo" value
 * @method Publicacion         setCoautores()   Sets the current record's "Coautores" collection
 * 
 * @package    pubudec
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublicacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('publicacion');
        $this->hasColumn('titulo', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_pub_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('autor_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('estado', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Autor', array(
             'local' => 'autor_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tipo', array(
             'local' => 'tipo_pub_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('PublicacionCoautor as Coautores', array(
             'local' => 'id',
             'foreign' => 'publicacion_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}