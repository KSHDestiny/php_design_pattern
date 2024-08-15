<?php

use Zend\Db\TableGateway\TableGateway as TableGateway;
use Zend\Db\Adapter\Adapter;

class UserGateway extends TableGateway
{
    public function __construct()
    {
        $configArray = array(
            'driver' => 'Mysqli',
            'database' => 'development',
            'username' => 'developer',
            'password' => 'developer',
            'options' => array('buffer_results' => true)
        );

        $adapter = new Adapter($configArray);

        parent::__construct('users', $adapter);
    }

    public function loadAll()
    {
        return $this->select();
    }

    public function loadById($id)
    {
        return $this->select(array('user_id' => $id));
    }
}