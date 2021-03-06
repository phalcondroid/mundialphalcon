<?php

class Calendario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_calendario;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_partido;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $fecha;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $hora;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_partido', 'Partido', 'id_partido', ['alias' => 'Partido']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'calendario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Calendario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Calendario
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
