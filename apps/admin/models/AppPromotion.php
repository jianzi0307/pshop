<?php

namespace apps\admin\models;

class AppPromotion extends Base
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
    protected $start_time;

    /**
     *
     * @var string
     */
    protected $end_time;

    /**
     *
     * @var integer
     */
    protected $condition;

    /**
     *
     * @var integer
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $award_value;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $intro;

    /**
     *
     * @var integer
     */
    protected $award_type;

    /**
     *
     * @var integer
     */
    protected $is_close;

    /**
     *
     * @var string
     */
    protected $user_group;

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
     * Method to set the value of field condition
     *
     * @param integer $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

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
     * Method to set the value of field award_value
     *
     * @param string $award_value
     * @return $this
     */
    public function setAwardValue($award_value)
    {
        $this->award_value = $award_value;

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
     * Method to set the value of field intro
     *
     * @param string $intro
     * @return $this
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Method to set the value of field award_type
     *
     * @param integer $award_type
     * @return $this
     */
    public function setAwardType($award_type)
    {
        $this->award_type = $award_type;

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
     * Method to set the value of field user_group
     *
     * @param string $user_group
     * @return $this
     */
    public function setUserGroup($user_group)
    {
        $this->user_group = $user_group;

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
     * Returns the value of field condition
     *
     * @return integer
     */
    public function getCondition()
    {
        return $this->condition;
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
     * Returns the value of field award_value
     *
     * @return string
     */
    public function getAwardValue()
    {
        return $this->award_value;
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
     * Returns the value of field intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Returns the value of field award_type
     *
     * @return integer
     */
    public function getAwardType()
    {
        return $this->award_type;
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
     * Returns the value of field user_group
     *
     * @return string
     */
    public function getUserGroup()
    {
        return $this->user_group;
    }

    public function getSource()
    {
        return 'app_promotion';
    }

}
