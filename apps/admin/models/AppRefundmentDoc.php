<?php

namespace apps\admin\models;

class AppRefundmentDoc extends Base
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
    protected $order_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var double
     */
    protected $amount;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var integer
     */
    protected $admin_id;

    /**
     *
     * @var integer
     */
    protected $pay_status;

    /**
     *
     * @var string
     */
    protected $content;

    /**
     *
     * @var string
     */
    protected $dispose_time;

    /**
     *
     * @var string
     */
    protected $dispose_idea;

    /**
     *
     * @var integer
     */
    protected $if_del;

    /**
     *
     * @var integer
     */
    protected $goods_id;

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     *
     * @var integer
     */
    protected $seller_id;

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
     * Method to set the value of field amount
     *
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

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
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field dispose_time
     *
     * @param string $dispose_time
     * @return $this
     */
    public function setDisposeTime($dispose_time)
    {
        $this->dispose_time = $dispose_time;

        return $this;
    }

    /**
     * Method to set the value of field dispose_idea
     *
     * @param string $dispose_idea
     * @return $this
     */
    public function setDisposeIdea($dispose_idea)
    {
        $this->dispose_idea = $dispose_idea;

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
     * Method to set the value of field goods_id
     *
     * @param integer $goods_id
     * @return $this
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;

        return $this;
    }

    /**
     * Method to set the value of field product_id
     *
     * @param integer $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

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
     * Returns the value of field amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
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
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field dispose_time
     *
     * @return string
     */
    public function getDisposeTime()
    {
        return $this->dispose_time;
    }

    /**
     * Returns the value of field dispose_idea
     *
     * @return string
     */
    public function getDisposeIdea()
    {
        return $this->dispose_idea;
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
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Returns the value of field product_id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('order_id', 'apps\admin\models\App_order', 'id', array('alias' => 'App_order'));
        $this->belongsTo('order_id', 'apps\admin\models\AppOrder', 'id', array('foreignKey' => true,'alias' => 'AppOrder'));
    }

    public function getSource()
    {
        return 'app_refundment_doc';
    }

}
