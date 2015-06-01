<?php

namespace apps\admin\models;

class AppOrder extends Base
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
    protected $order_no;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $pay_type;

    /**
     *
     * @var integer
     */
    protected $distribution;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $pay_status;

    /**
     *
     * @var integer
     */
    protected $distribution_status;

    /**
     *
     * @var string
     */
    protected $accept_name;

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
     * @var double
     */
    protected $payable_amount;

    /**
     *
     * @var double
     */
    protected $real_amount;

    /**
     *
     * @var double
     */
    protected $payable_freight;

    /**
     *
     * @var double
     */
    protected $real_freight;

    /**
     *
     * @var string
     */
    protected $pay_time;

    /**
     *
     * @var string
     */
    protected $send_time;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var string
     */
    protected $completion_time;

    /**
     *
     * @var integer
     */
    protected $invoice;

    /**
     *
     * @var string
     */
    protected $postscript;

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
     * @var double
     */
    protected $insured;

    /**
     *
     * @var integer
     */
    protected $if_insured;

    /**
     *
     * @var double
     */
    protected $pay_fee;

    /**
     *
     * @var string
     */
    protected $invoice_title;

    /**
     *
     * @var double
     */
    protected $taxes;

    /**
     *
     * @var double
     */
    protected $promotions;

    /**
     *
     * @var double
     */
    protected $discount;

    /**
     *
     * @var double
     */
    protected $order_amount;

    /**
     *
     * @var string
     */
    protected $prop;

    /**
     *
     * @var string
     */
    protected $accept_time;

    /**
     *
     * @var integer
     */
    protected $exp;

    /**
     *
     * @var integer
     */
    protected $point;

    /**
     *
     * @var integer
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $trade_no;

    /**
     *
     * @var integer
     */
    protected $takeself;

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
     * Method to set the value of field order_no
     *
     * @param string $order_no
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->order_no = $order_no;

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
     * Method to set the value of field pay_type
     *
     * @param integer $pay_type
     * @return $this
     */
    public function setPayType($pay_type)
    {
        $this->pay_type = $pay_type;

        return $this;
    }

    /**
     * Method to set the value of field distribution
     *
     * @param integer $distribution
     * @return $this
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;

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
     * Method to set the value of field pay_status
     *
     * @param integer $pay_status
     * @return $this
     */
    public function setPayStatus($pay_status)
    {
        $this->pay_status = $pay_status;

        return $this;
    }

    /**
     * Method to set the value of field distribution_status
     *
     * @param integer $distribution_status
     * @return $this
     */
    public function setDistributionStatus($distribution_status)
    {
        $this->distribution_status = $distribution_status;

        return $this;
    }

    /**
     * Method to set the value of field accept_name
     *
     * @param string $accept_name
     * @return $this
     */
    public function setAcceptName($accept_name)
    {
        $this->accept_name = $accept_name;

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
     * Method to set the value of field payable_amount
     *
     * @param double $payable_amount
     * @return $this
     */
    public function setPayableAmount($payable_amount)
    {
        $this->payable_amount = $payable_amount;

        return $this;
    }

    /**
     * Method to set the value of field real_amount
     *
     * @param double $real_amount
     * @return $this
     */
    public function setRealAmount($real_amount)
    {
        $this->real_amount = $real_amount;

        return $this;
    }

    /**
     * Method to set the value of field payable_freight
     *
     * @param double $payable_freight
     * @return $this
     */
    public function setPayableFreight($payable_freight)
    {
        $this->payable_freight = $payable_freight;

        return $this;
    }

    /**
     * Method to set the value of field real_freight
     *
     * @param double $real_freight
     * @return $this
     */
    public function setRealFreight($real_freight)
    {
        $this->real_freight = $real_freight;

        return $this;
    }

    /**
     * Method to set the value of field pay_time
     *
     * @param string $pay_time
     * @return $this
     */
    public function setPayTime($pay_time)
    {
        $this->pay_time = $pay_time;

        return $this;
    }

    /**
     * Method to set the value of field send_time
     *
     * @param string $send_time
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->send_time = $send_time;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param string $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Method to set the value of field completion_time
     *
     * @param string $completion_time
     * @return $this
     */
    public function setCompletionTime($completion_time)
    {
        $this->completion_time = $completion_time;

        return $this;
    }

    /**
     * Method to set the value of field invoice
     *
     * @param integer $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Method to set the value of field postscript
     *
     * @param string $postscript
     * @return $this
     */
    public function setPostscript($postscript)
    {
        $this->postscript = $postscript;

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
     * Method to set the value of field insured
     *
     * @param double $insured
     * @return $this
     */
    public function setInsured($insured)
    {
        $this->insured = $insured;

        return $this;
    }

    /**
     * Method to set the value of field if_insured
     *
     * @param integer $if_insured
     * @return $this
     */
    public function setIfInsured($if_insured)
    {
        $this->if_insured = $if_insured;

        return $this;
    }

    /**
     * Method to set the value of field pay_fee
     *
     * @param double $pay_fee
     * @return $this
     */
    public function setPayFee($pay_fee)
    {
        $this->pay_fee = $pay_fee;

        return $this;
    }

    /**
     * Method to set the value of field invoice_title
     *
     * @param string $invoice_title
     * @return $this
     */
    public function setInvoiceTitle($invoice_title)
    {
        $this->invoice_title = $invoice_title;

        return $this;
    }

    /**
     * Method to set the value of field taxes
     *
     * @param double $taxes
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Method to set the value of field promotions
     *
     * @param double $promotions
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }

    /**
     * Method to set the value of field discount
     *
     * @param double $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Method to set the value of field order_amount
     *
     * @param double $order_amount
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {
        $this->order_amount = $order_amount;

        return $this;
    }

    /**
     * Method to set the value of field prop
     *
     * @param string $prop
     * @return $this
     */
    public function setProp($prop)
    {
        $this->prop = $prop;

        return $this;
    }

    /**
     * Method to set the value of field accept_time
     *
     * @param string $accept_time
     * @return $this
     */
    public function setAcceptTime($accept_time)
    {
        $this->accept_time = $accept_time;

        return $this;
    }

    /**
     * Method to set the value of field exp
     *
     * @param integer $exp
     * @return $this
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Method to set the value of field point
     *
     * @param integer $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->point = $point;

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
     * Method to set the value of field trade_no
     *
     * @param string $trade_no
     * @return $this
     */
    public function setTradeNo($trade_no)
    {
        $this->trade_no = $trade_no;

        return $this;
    }

    /**
     * Method to set the value of field takeself
     *
     * @param integer $takeself
     * @return $this
     */
    public function setTakeself($takeself)
    {
        $this->takeself = $takeself;

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
     * Returns the value of field order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->order_no;
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
     * Returns the value of field pay_type
     *
     * @return integer
     */
    public function getPayType()
    {
        return $this->pay_type;
    }

    /**
     * Returns the value of field distribution
     *
     * @return integer
     */
    public function getDistribution()
    {
        return $this->distribution;
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
     * Returns the value of field pay_status
     *
     * @return integer
     */
    public function getPayStatus()
    {
        return $this->pay_status;
    }

    /**
     * Returns the value of field distribution_status
     *
     * @return integer
     */
    public function getDistributionStatus()
    {
        return $this->distribution_status;
    }

    /**
     * Returns the value of field accept_name
     *
     * @return string
     */
    public function getAcceptName()
    {
        return $this->accept_name;
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
     * Returns the value of field payable_amount
     *
     * @return double
     */
    public function getPayableAmount()
    {
        return $this->payable_amount;
    }

    /**
     * Returns the value of field real_amount
     *
     * @return double
     */
    public function getRealAmount()
    {
        return $this->real_amount;
    }

    /**
     * Returns the value of field payable_freight
     *
     * @return double
     */
    public function getPayableFreight()
    {
        return $this->payable_freight;
    }

    /**
     * Returns the value of field real_freight
     *
     * @return double
     */
    public function getRealFreight()
    {
        return $this->real_freight;
    }

    /**
     * Returns the value of field pay_time
     *
     * @return string
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * Returns the value of field send_time
     *
     * @return string
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * Returns the value of field create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Returns the value of field completion_time
     *
     * @return string
     */
    public function getCompletionTime()
    {
        return $this->completion_time;
    }

    /**
     * Returns the value of field invoice
     *
     * @return integer
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Returns the value of field postscript
     *
     * @return string
     */
    public function getPostscript()
    {
        return $this->postscript;
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
     * Returns the value of field insured
     *
     * @return double
     */
    public function getInsured()
    {
        return $this->insured;
    }

    /**
     * Returns the value of field if_insured
     *
     * @return integer
     */
    public function getIfInsured()
    {
        return $this->if_insured;
    }

    /**
     * Returns the value of field pay_fee
     *
     * @return double
     */
    public function getPayFee()
    {
        return $this->pay_fee;
    }

    /**
     * Returns the value of field invoice_title
     *
     * @return string
     */
    public function getInvoiceTitle()
    {
        return $this->invoice_title;
    }

    /**
     * Returns the value of field taxes
     *
     * @return double
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Returns the value of field promotions
     *
     * @return double
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Returns the value of field discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Returns the value of field order_amount
     *
     * @return double
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    /**
     * Returns the value of field prop
     *
     * @return string
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * Returns the value of field accept_time
     *
     * @return string
     */
    public function getAcceptTime()
    {
        return $this->accept_time;
    }

    /**
     * Returns the value of field exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Returns the value of field point
     *
     * @return integer
     */
    public function getPoint()
    {
        return $this->point;
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
     * Returns the value of field trade_no
     *
     * @return string
     */
    public function getTradeNo()
    {
        return $this->trade_no;
    }

    /**
     * Returns the value of field takeself
     *
     * @return integer
     */
    public function getTakeself()
    {
        return $this->takeself;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_collection_doc', 'order_id', array('alias' => 'App_collection_doc'));
        $this->hasMany('id', 'apps\admin\models\App_delivery_doc', 'order_id', array('alias' => 'App_delivery_doc'));
        $this->hasMany('id', 'apps\admin\models\App_order_goods', 'order_id', array('alias' => 'App_order_goods'));
        $this->hasMany('id', 'apps\admin\models\App_order_log', 'order_id', array('alias' => 'App_order_log'));
        $this->hasMany('id', 'apps\admin\models\App_refundment_doc', 'order_id', array('alias' => 'App_refundment_doc'));
        $this->hasMany('id', 'apps\admin\models\AppCollectionDoc', 'order_id', array('alias' => 'AppCollectionDoc'));
        $this->hasMany('id', 'apps\admin\models\AppDeliveryDoc', 'order_id', array('alias' => 'AppDeliveryDoc'));
        $this->hasMany('id', 'apps\admin\models\AppOrderGoods', 'order_id', array('alias' => 'AppOrderGoods'));
        $this->hasMany('id', 'apps\admin\models\AppOrderLog', 'order_id', array('alias' => 'AppOrderLog'));
        $this->hasMany('id', 'apps\admin\models\AppRefundmentDoc', 'order_id', array('alias' => 'AppRefundmentDoc'));
    }

    public function getSource()
    {
        return 'app_order';
    }

}
