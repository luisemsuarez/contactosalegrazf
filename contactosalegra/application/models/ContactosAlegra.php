<?php

class Application_Model_ContactosAlegra
{
    protected $_id;
    protected $_nombre;
    protected $_identificacion;
    protected $_email;
    protected $_telefono1;
    protected $_telefono2;
    protected $_fax;
	protected $_celular;
	protected $_observaciones;
	protected $_tipo;
	protected $_direccion;
	protected $_vendedor;
	protected $_terminospago;
	protected $_listaprecio;
	protected $_internalContacs;
	
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid ContactosAlegra property');
        }
        $this->$method($value);
    }	

    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid ContactosAlegra property');
        }
        return $this->$method();
    }	

    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function setId($text)
    {
        $this->_Id = (string) $text;
        return $this;
    }

    public function getId()
    {
        return $this->_Id;
    }	

    public function setNombre($text)
    {
        $this->_nombre = (string) $text;
        return $this;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }	

    public function setIdentificacion($text)
    {
        $this->_identificacion = (string) $text;
        return $this;
    }

    public function getIdentificacion()
    {
        return $this->_identificacion;
    }	

    public function setEmail($text)
    {
        $this->_email = (string) $text;
        return $this;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setTelefono1($text)
    {
        $this->_telefono1 = (string) $text;
        return $this;
    }

    public function getTelefono1()
    {
        return $this->_telefono1;
    }

    public function setTelefono2($text)
    {
        $this->_telefono2 = (string) $text;
        return $this;
    }

    public function getTelefono2()
    {
        return $this->_fax;
    }
	
    public function setFax($text)
    {
        $this->_fax = (string) $text;
        return $this;
    }

    public function getFax()
    {
        return $this->_fax;
    }	

    public function setCelular($text)
    {
        $this->_celular = (string) $text;
        return $this;
    }

    public function getCelular()
    {
        return $this->_celular;
    }		

    public function setObservaciones($text)
    {
        $this->_observaciones = (string) $text;
        return $this;
    }

    public function getObservaciones()
    {
        return $this->_observaciones;
    }

    public function setTipo($text)
    {
        $this->_tipo = (string) $text;
        return $this;
    }

    public function getTipo()
    {
        return $this->_tipo;
    }

    public function setDireccion($text)
    {
        $this->_direccion = (string) $text;
        return $this;
    }

    public function getDireccion()
    {
        return $this->_direccion;
    }

    public function setVendedor($text)
    {
        $this->_vendedor = (string) $text;
        return $this;
    }

    public function getVendedor()
    {
        return $this->_vendedor;
    }

    public function setTerminosPago($text)
    {
        $this->_terminospago = (string) $text;
        return $this;
    }

    public function getTerminosPago()
    {
        return $this->_terminospago;
    }

    public function setListaPrecio($text)
    {
        $this->_listaprecio = (string) $text;
        return $this;
    }

    public function getListaPrecio()
    {
        return $this->_listaprecio;
    }
	
    public function setInternalContacts($text)
    {
        $this->_internalContacs = (string) $text;
        return $this;
    }

    public function getInternalContacts()
    {
        return $this->_internalContacs;
    }
	
}

