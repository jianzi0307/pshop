<?php

namespace apps\admin\models;

class AppDeliveryDoc extends Base
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $order_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $admin_id;

    /**
     *
     * @var integer
     */
    protected $seller_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $postcode;

    /**
     *
     * @var string
     */
    protected $telphone;

    /**
     *
     * @var integer
     */
    protected $country;

    /**
     *
     * @var integer
     */
    protected $province;

    /**
     *
     * @var integer
     */
    protected $city;

    /**
     *
     * @var integer
     */
    protected $area;

    /**
     *
     * @var string
     */
    protected $address;

    /**
     *
     * @var string
     */
    protected $mobile;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var double
     */
    protected $freight;

    /**
     *
     * @var string
     */
    protected $delivery_code;

    /**
     *
     * @var string
     */
    protected $delivery_type;

    /**
     *
     * @var string
     */
    protected $note;

    /**
     *
     * @var integer
     */
    protected $if_del;

    /**
     *
     * @var integer
     */
    protected $freight_id;

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
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field admin_id
     *
     * @param integer $admin_id
     * @return $this
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * Method to set the value of field seller_id
     *
     * @param integer $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;

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
     * Method to set the value of field postcode
     *
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Method to set the value of field telphone
     *
     * @param string $telphone
     * @return $this
     */
    public function setTelphone($telphone)
    {
        $this->telphone = $telphone;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param integer $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field province
     *
     * @param integer $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Method to set the value of field city
     *
     * @param integer $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Method to set the value of field area
     *
     * @param integer $area
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Method to set the value of field freight
     *
     * @param double $freight
     * @return $this
     */
    public function setFreight($freight)
    {
        $this->freight = $freight;

        return $this;
    }

    /**
     * Method to set the value of field delivery_code
     *
     * @param string $delivery_code
     * @return $this
     */
    public function setDeliveryCode($delivery_code)
    {
        $this->delivery_code = $delivery_code;

        return $this;
    }

    /**
     * Method to set the value of field delivery_type
     *
     * @param string $delivery_type
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->delivery_type = $delivery_type;

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
     * Method to set the value of field if_del
     *
     * @param integer $if_del
     * @return $this
     */
    public function setIfDel($if_del)
    {
        $this->if_del = $if_del;

        return $this;
    }

    /**
     * Method to set the value of field freight_id
     *
     * @param integer $freight_id
     * @return $this
     */
    public function setFreightId($freight_id)
    {
        $this->freight_id = $freight_id;

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
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Returns the value of field seller_id
     *
     * @return integer
     */
    public function getSellerId()
    {
        return $this->seller_id;
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
     * Returns the value of field postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Returns the value of field telphone
     *
     * @return string
     */
    public function getTelphone()
    {
        return $this->telphone;
    }

    /**
     * Returns the value of field country
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field province
     *
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Returns the value of field city
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the value of field area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Returns the value of field freight
     *
     * @return double
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * Returns the value of field delivery_code
     *
     * @return string
     */
    public function getDeliveryCode()
    {
        return $this->delivery_code;
    }

    /**
     * Returns the value of field delivery_type
     *
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->delivery_type;
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
     * Returns the value of field if_del
     *
     * @return integer
     */
    public function getIfDel()
    {
        return $this->if_del;
    }

    /**
     * Returns the value of field freight_id
     *
     * @return integer
     */
    public function getFreightId()
    {
        return $this->freight_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('order_id', 'apps\admin\models\App_order', 'id', array('alias' => 'App_order'));
        $this->belongsTo('freight_id', 'apps\admin\models\App_freight_company', 'id', array('alias' => 'App_freight_company'));
        $this->belongsTo('order_id', 'apps\admin\models\AppOrder', 'id', array('foreignKey' => true,'alias' => 'AppOrder'));
        $this->belongsTo('freight_id', 'apps\admin\models\AppFreightCompany', 'id', array('foreignKey' => true,'alias' => 'AppFreightCompany'));
    }

    public function getSource()
    {
        return 'app_delivery_doc';
    }

}
