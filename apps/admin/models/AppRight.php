<?php

namespace apps\admin\models;

class AppRight extends Base
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
    protected $right;

    /**
     *
     * @var integer
     */
    protected $is_del;

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
     * Method to set the value of field right
     *
     * @param string $right
     * @return $this
     */
    public function setRight($right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Method to set the value of field is_del
     *
     * @param integer $is_del
     * @return $this
     */
    public function setIsDel($is_del)
    {
        $this->is_del = $is_del;

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
     * Returns the value of field right
     *
     * @return string
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Returns the value of field is_del
     *
     * @return integer
     */
    public function getIsDel()
    {
        return $this->is_del;
    }

    public function getSource()
    {
        return 'app_right';
    }

}
