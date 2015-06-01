<?php

namespace apps\admin\models;

class AppProp extends Base
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
     * @var string
     */
    protected $card_name;

    /**
     *
     * @var string
     */
    protected $card_pwd;

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
     * @var double
     */
    protected $value;

    /**
     *
     * @var integer
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $condition;

    /**
     *
     * @var integer
     */
    protected $is_close;

    /**
     *
     * @var string
     */
    protected $img;

    /**
     *
     * @var integer
     */
    protected $is_userd;

    /**
     *
     * @var integer
     */
    protected $is_send;

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
     * Method to set the value of field card_name
     *
     * @param string $card_name
     * @return $this
     */
    public function setCardName($card_name)
    {
        $this->card_name = $card_name;

        return $this;
    }

    /**
     * Method to set the value of field card_pwd
     *
     * @param string $card_pwd
     * @return $this
     */
    public function setCardPwd($card_pwd)
    {
        $this->card_pwd = $card_pwd;

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
     * Method to set the value of field value
     *
     * @param double $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

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
     * Method to set the value of field condition
     *
     * @param string $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Method to set the value of field is_close
     *
     * @param integer $is_close
     * @return $this
     */
    public function setIsClose($is_close)
    {
        $this->is_close = $is_close;

        return $this;
    }

    /**
     * Method to set the value of field img
     *
     * @param string $img
     * @return $this
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Method to set the value of field is_userd
     *
     * @param integer $is_userd
     * @return $this
     */
    public function setIsUserd($is_userd)
    {
        $this->is_userd = $is_userd;

        return $this;
    }

    /**
     * Method to set the value of field is_send
     *
     * @param integer $is_send
     * @return $this
     */
    public function setIsSend($is_send)
    {
        $this->is_send = $is_send;

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
     * Returns the value of field card_name
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->card_name;
    }

    /**
     * Returns the value of field card_pwd
     *
     * @return string
     */
    public function getCardPwd()
    {
        return $this->card_pwd;
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
     * Returns the value of field value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->value;
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
     * Returns the value of field condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Returns the value of field is_close
     *
     * @return integer
     */
    public function getIsClose()
    {
        return $this->is_close;
    }

    /**
     * Returns the value of field img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Returns the value of field is_userd
     *
     * @return integer
     */
    public function getIsUserd()
    {
        return $this->is_userd;
    }

    /**
     * Returns the value of field is_send
     *
     * @return integer
     */
    public function getIsSend()
    {
        return $this->is_send;
    }

    public function getSource()
    {
        return 'app_prop';
    }

}
