<?php

namespace apps\admin\models;

class AppBrandCategory extends Base
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
    protected $goods_category_id;

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
     * Method to set the value of field goods_category_id
     *
     * @param integer $goods_category_id
     * @return $this
     */
    public function setGoodsCategoryId($goods_category_id)
    {
        $this->goods_category_id = $goods_category_id;

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
     * Returns the value of field goods_category_id
     *
     * @return integer
     */
    public function getGoodsCategoryId()
    {
        return $this->goods_category_id;
    }

    public function getSource()
    {
        return 'app_brand_category';
    }

}
