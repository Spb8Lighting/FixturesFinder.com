<?php
class MANUFAccessories
{
    private $_id;
    private $_manufacturer;
    private $_name;
    private $_orderid;
    private $_red;
    private $_green;
    private $_blue;
    private $_img;
    private $_hmd5;
    private $_mode;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    # Hydrate
    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    # /Hydrate

    # Getters

    public function id()
    {return $this->_id;}
    public function manufacturer()
    {return $this->_manufacturer;}
    public function name()
    {return $this->_name;}
    public function orderid()
    {return $this->_orderid;}
    public function red()
    {return $this->_red;}
    public function green()
    {return $this->_green;}
    public function blue()
    {return $this->_blue;}
    public function img()
    {return $this->_img;}
    public function hmd5()
    {return $this->_hmd5;}
    public function mode()
    {return $this->_mode;}

    # /Getters

    # Setters
    public function setId($id)
    {
        if (is_numeric($id)) {
            $this->_id = $id;
        }
    }
    public function setManufacturer($manufacturer)
    {
        if (is_string($manufacturer)) {
            $this->_manufacturer = $manufacturer;
        }
    }
    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        }
    }
    public function setOrderid($orderid)
    {
        if (is_string($orderid)) {
            $this->_orderid = $orderid;
        }
    }
    public function setRed($red)
    {
        if (is_string($red)) {
            $this->_red = $red;
        }
    }
    public function setGreen($green)
    {
        if (is_string($green)) {
            $this->_green = $green;
        }
    }
    public function setBlue($blue)
    {
        if (is_string($blue)) {
            $this->_blue = $blue;
        }
    }
    public function setImg($img)
    {
        if (is_string($img)) {
            $this->_img = $img;
        }
    }
    public function setHmd5($hmd5)
    {
        if (is_string($hmd5)) {
            $this->_hmd5 = $hmd5;
        }
    }
    public function setMode($mode)
    {
        if (is_string($mode)) {
            $this->_mode = $mode;
        }
    }
    # /Setters
}
