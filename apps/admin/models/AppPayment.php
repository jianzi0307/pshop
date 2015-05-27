<?php

namespace apps\admin\models;

class AppPayment extends Base
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $class_name;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $logo;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $order;

    /**
     *
     * @var string
     */
    protected $note;

    /**
     *
     * @var double
     */
    protected $poundage;

    /**
     *
     * @var integer
     */
    protected $poundage_type;

    /**
     *
     * @var string
     */
    protected $config_param;

    /**
     *
     * @var integer
     */
    protected $client_type;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field class_name
     *
     * @param string $class_name
     * @return $this
     */
    public function setClassName($class_name)
    {
        $this->class_name = $class_name;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field logo
     *
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field order
     *
     * @param integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Method to set the value of field note
     *
     * @param string $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Method to set the value of field poundage
     *
     * @param double $poundage
     * @return $this
     */
    public function setPoundage($poundage)
    {
        $this->poundage = $poundage;

        return $this;
    }

    /**
     * Method to set the value of field poundage_type
     *
     * @param integer $poundage_type
     * @return $this
     */
    public function setPoundageType($poundage_type)
    {
        $this->poundage_type = $poundage_type;

        return $this;
    }

    /**
     * Method to set the value of field config_param
     *
     * @param string $config_param
     * @return $this
     */
    public function setConfigParam($config_param)
    {
        $this->config_param = $config_param;

        return $this;
    }

    /**
     * Method to set the value of field client_type
     *
     * @param integer $client_type
     * @return $this
     */
    public function setClientType($client_type)
    {
        $this->client_type = $client_type;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field class_name
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->class_name;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Returns the value of field note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Returns the value of field poundage
     *
     * @return double
     */
    public function getPoundage()
    {
        return $this->poundage;
    }

    /**
     * Returns the value of field poundage_type
     *
     * @return integer
     */
    public function getPoundageType()
    {
        return $this->poundage_type;
    }

    /**
     * Returns the value of field config_param
     *
     * @return string
     */
    public function getConfigParam()
    {
        return $this->config_param;
    }

    /**
     * Returns the value of field client_type
     *
     * @return integer
     */
    public function getClientType()
    {
        return $this->client_type;
    }

    public function getSource()
    {
        return 'app_payment';
    }

}
