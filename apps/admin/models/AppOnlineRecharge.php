<?php

namespace apps\admin\models;

class AppOnlineRecharge extends Base
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
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $recharge_no;

    /**
     *
     * @var double
     */
    protected $account;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var string
     */
    protected $payment_name;

    /**
     *
     * @var integer
     */
    protected $status;

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
     * Method to set the value of field recharge_no
     *
     * @param string $recharge_no
     * @return $this
     */
    public function setRechargeNo($recharge_no)
    {
        $this->recharge_no = $recharge_no;

        return $this;
    }

    /**
     * Method to set the value of field account
     *
     * @param double $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

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
     * Method to set the value of field payment_name
     *
     * @param string $payment_name
     * @return $this
     */
    public function setPaymentName($payment_name)
    {
        $this->payment_name = $payment_name;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field recharge_no
     *
     * @return string
     */
    public function getRechargeNo()
    {
        return $this->recharge_no;
    }

    /**
     * Returns the value of field account
     *
     * @return double
     */
    public function getAccount()
    {
        return $this->account;
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
     * Returns the value of field payment_name
     *
     * @return string
     */
    public function getPaymentName()
    {
        return $this->payment_name;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_id', 'apps\admin\models\App_user', 'id', array('alias' => 'App_user'));
        $this->belongsTo('user_id', 'apps\admin\models\AppUser', 'id', array('foreignKey' => true,'alias' => 'AppUser'));
    }

    public function getSource()
    {
        return 'app_online_recharge';
    }

}
