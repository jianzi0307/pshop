<?php

namespace apps\admin\models;

class AppHelpCategory extends Base
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
    protected $sort;

    /**
     *
     * @var integer
     */
    protected $position_left;

    /**
     *
     * @var integer
     */
    protected $position_foot;

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
     * Method to set the value of field sort
     *
     * @param integer $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Method to set the value of field position_left
     *
     * @param integer $position_left
     * @return $this
     */
    public function setPositionLeft($position_left)
    {
        $this->position_left = $position_left;

        return $this;
    }

    /**
     * Method to set the value of field position_foot
     *
     * @param integer $position_foot
     * @return $this
     */
    public function setPositionFoot($position_foot)
    {
        $this->position_foot = $position_foot;

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
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Returns the value of field position_left
     *
     * @return integer
     */
    public function getPositionLeft()
    {
        return $this->position_left;
    }

    /**
     * Returns the value of field position_foot
     *
     * @return integer
     */
    public function getPositionFoot()
    {
        return $this->position_foot;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_help', 'cat_id', array('alias' => 'App_help'));
        $this->hasMany('id', 'apps\admin\models\AppHelp', 'cat_id', array('alias' => 'AppHelp'));
    }

    public function getSource()
    {
        return 'app_help_category';
    }

}
