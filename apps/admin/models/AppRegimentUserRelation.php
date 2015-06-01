<?php

namespace apps\admin\models;

class AppRegimentUserRelation extends Base
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
     * @var integer
     */
    protected $regiment_id;

    /**
     *
     * @var string
     */
    protected $join_time;

    /**
     *
     * @var integer
     */
    protected $is_over;

    /**
     *
     * @var string
     */
    protected $hash;

    /**
     *
     * @var string
     */
    protected $order_no;

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
     * Method to set the value of field regiment_id
     *
     * @param integer $regiment_id
     * @return $this
     */
    public function setRegimentId($regiment_id)
    {
        $this->regiment_id = $regiment_id;

        return $this;
    }

    /**
     * Method to set the value of field join_time
     *
     * @param string $join_time
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->join_time = $join_time;

        return $this;
    }

    /**
     * Method to set the value of field is_over
     *
     * @param integer $is_over
     * @return $this
     */
    public function setIsOver($is_over)
    {
        $this->is_over = $is_over;

        return $this;
    }

    /**
     * Method to set the value of field hash
     *
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

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
     * Returns the value of field regiment_id
     *
     * @return integer
     */
    public function getRegimentId()
    {
        return $this->regiment_id;
    }

    /**
     * Returns the value of field join_time
     *
     * @return string
     */
    public function getJoinTime()
    {
        return $this->join_time;
    }

    /**
     * Returns the value of field is_over
     *
     * @return integer
     */
    public function getIsOver()
    {
        return $this->is_over;
    }

    /**
     * Returns the value of field hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('regiment_id', 'apps\admin\models\App_regiment', 'id', array('alias' => 'App_regiment'));
        $this->belongsTo('regiment_id', 'apps\admin\models\AppRegiment', 'id', array('foreignKey' => true,'alias' => 'AppRegiment'));
    }

    public function getSource()
    {
        return 'app_regiment_user_relation';
    }

}
