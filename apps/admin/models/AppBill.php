<?php

namespace apps\admin\models;

class AppBill extends Base
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
    protected $seller_id;

    /**
     *
     * @var string
     */
    protected $apply_time;

    /**
     *
     * @var string
     */
    protected $pay_time;

    /**
     *
     * @var integer
     */
    protected $admin_id;

    /**
     *
     * @var integer
     */
    protected $is_pay;

    /**
     *
     * @var string
     */
    protected $apply_content;

    /**
     *
     * @var string
     */
    protected $pay_content;

    /**
     *
     * @var string
     */
    protected $start_time;

    /**
     *
     * @var string
     */
    protected $end_time;

    /**
     *
     * @var string
     */
    protected $log;

    /**
     *
     * @var string
     */
    protected $order_goods_ids;

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
     * Method to set the value of field apply_time
     *
     * @param string $apply_time
     * @return $this
     */
    public function setApplyTime($apply_time)
    {
        $this->apply_time = $apply_time;

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
     * Method to set the value of field is_pay
     *
     * @param integer $is_pay
     * @return $this
     */
    public function setIsPay($is_pay)
    {
        $this->is_pay = $is_pay;

        return $this;
    }

    /**
     * Method to set the value of field apply_content
     *
     * @param string $apply_content
     * @return $this
     */
    public function setApplyContent($apply_content)
    {
        $this->apply_content = $apply_content;

        return $this;
    }

    /**
     * Method to set the value of field pay_content
     *
     * @param string $pay_content
     * @return $this
     */
    public function setPayContent($pay_content)
    {
        $this->pay_content = $pay_content;

        return $this;
    }

    /**
     * Method to set the value of field start_time
     *
     * @param string $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }

    /**
     * Method to set the value of field end_time
     *
     * @param string $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    /**
     * Method to set the value of field log
     *
     * @param string $log
     * @return $this
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Method to set the value of field order_goods_ids
     *
     * @param string $order_goods_ids
     * @return $this
     */
    public function setOrderGoodsIds($order_goods_ids)
    {
        $this->order_goods_ids = $order_goods_ids;

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
     * Returns the value of field seller_id
     *
     * @return integer
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * Returns the value of field apply_time
     *
     * @return string
     */
    public function getApplyTime()
    {
        return $this->apply_time;
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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Returns the value of field is_pay
     *
     * @return integer
     */
    public function getIsPay()
    {
        return $this->is_pay;
    }

    /**
     * Returns the value of field apply_content
     *
     * @return string
     */
    public function getApplyContent()
    {
        return $this->apply_content;
    }

    /**
     * Returns the value of field pay_content
     *
     * @return string
     */
    public function getPayContent()
    {
        return $this->pay_content;
    }

    /**
     * Returns the value of field start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Returns the value of field end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Returns the value of field log
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Returns the value of field order_goods_ids
     *
     * @return string
     */
    public function getOrderGoodsIds()
    {
        return $this->order_goods_ids;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('seller_id', 'apps\admin\models\App_seller', 'id', array('alias' => 'App_seller'));
        $this->belongsTo('seller_id', 'apps\admin\models\AppSeller', 'id', array('foreignKey' => true,'alias' => 'AppSeller'));
    }

    public function getSource()
    {
        return 'app_bill';
    }

}
