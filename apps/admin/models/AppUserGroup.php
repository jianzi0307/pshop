<?php

namespace apps\admin\models;

class AppUserGroup extends Base
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
    protected $group_name;

    /**
     *
     * @var double
     */
    protected $discount;

    /**
     *
     * @var integer
     */
    protected $minexp;

    /**
     *
     * @var integer
     */
    protected $maxexp;

    /**
     *
     * @var string
     */
    protected $message_ids;

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
     * Method to set the value of field group_name
     *
     * @param string $group_name
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->group_name = $group_name;

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
     * Method to set the value of field minexp
     *
     * @param integer $minexp
     * @return $this
     */
    public function setMinexp($minexp)
    {
        $this->minexp = $minexp;

        return $this;
    }

    /**
     * Method to set the value of field maxexp
     *
     * @param integer $maxexp
     * @return $this
     */
    public function setMaxexp($maxexp)
    {
        $this->maxexp = $maxexp;

        return $this;
    }

    /**
     * Method to set the value of field message_ids
     *
     * @param string $message_ids
     * @return $this
     */
    public function setMessageIds($message_ids)
    {
        $this->message_ids = $message_ids;

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
     * Returns the value of field group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
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
     * Returns the value of field minexp
     *
     * @return integer
     */
    public function getMinexp()
    {
        return $this->minexp;
    }

    /**
     * Returns the value of field maxexp
     *
     * @return integer
     */
    public function getMaxexp()
    {
        return $this->maxexp;
    }

    /**
     * Returns the value of field message_ids
     *
     * @return string
     */
    public function getMessageIds()
    {
        return $this->message_ids;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_group_price', 'group_id', array('alias' => 'App_group_price'));
        $this->hasMany('id', 'apps\admin\models\AppGroupPrice', 'group_id', array('alias' => 'AppGroupPrice'));
    }

    public function getSource()
    {
        return 'app_user_group';
    }

}
