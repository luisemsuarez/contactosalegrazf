<?php

class Application_Model_ContactosAlegraMapper
{

    protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
	
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_ContactosAlegra');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_ContactosAlegra $contactosalegra)
    {
        $data = array(
            'email'   => $contactosalegra->getEmail(),
            'comment' => $contactosalegra->getComment(),
            'created' => date('Y-m-d H:i:s'),
        );
 
        if (null === ($id = $guestbook->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }	

    public function find($id, Application_Model_ContactosAlegra $contactosalegra)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $contactosalegra->setId($row->id)
                  ->setEmail($row->email)
                  ->setComment($row->comment)
                  ->setCreated($row->created);
    }
	
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_ContactosAlegra();
            $entry->setId($row->id)
                  ->setNombre($row->nombre)
                  ->setIdentificacion($row->identificacion)
                  ->setEmail($row->email)
				  ->setTelefono1($row->telefono1)
				  ->setTelefono2($row->telefono2)
				  ->setFax($row->fax)
				  ->setCelular($row->celular)
				  ->setObservaciones($row->observaciones)
				  ->setTipo($row->tipo)
				  ->setDireccion($row->direccion)
				  ->setVendedor($row->vendedor)
				  ->setTerminosPago($row->terminosdepago)
				  ->setListaPrecio($row->listaprecio)
				  ->setInternalContacts($row->internalcontacts);
            $entries[] = $entry;
        }
        return $entries;
    }	
	
}

