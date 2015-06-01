<?php

namespace apps\admin\models;

class AppDelivery extends Base
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
    protected $description;

    /**
     *
     * @var string
     */
    protected $area_groupid;

    /**
     *
     * @var string
     */
    protected $firstprice;

    /**
     *
     * @var string
     */
    protected $secondprice;

    /**
     *
     * @var integer
     */
    protected $type;

    /**
     *
     * @var integer
     */
    protected $first_weight;

    /**
     *
     * @var integer
     */
    protected $second_weight;

    /**
     *
     * @var double
     */
    protected $first_price;

    /**
     *
     * @var double
     */
    protected $second_price;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $sort;

    /**
     *
     * @var integer
     */
    protected $is_save_price;

    /**
     *
     * @var double
     */
    protected $save_rate;

    /**
     *
     * @var double
     */
    protected $low_price;

    /**
     *
     * @var integer
     */
    protected $price_type;

    /**
     *
     * @var integer
     */
    protected $open_default;

    /**
     *
     * @var integer
     */
    protected $is_delete;

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
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field area_groupid
     *
     * @param string $area_groupid
     * @return $this
     */
    public function setAreaGroupid($area_groupid)
    {
        $this->area_groupid = $area_groupid;

        return $this;
    }

    /**
     * Method to set the value of field firstprice
     *
     * @param string $firstprice
     * @return $this
     */
    public function setFirstprice($firstprice)
    {
        $this->firstprice = $firstprice;

        return $this;
    }

    /**
     * Method to set the value of field secondprice
     *
     * @param string $secondprice
     * @return $this
     */
    public function setSecondprice($secondprice)
    {
        $this->secondprice = $secondprice;

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
     * Method to set the value of field first_weight
     *
     * @param integer $first_weight
     * @return $this
     */
    public function setFirstWeight($first_weight)
    {
        $this->first_weight = $first_weight;

        return $this;
    }

    /**
     * Method to set the value of field second_weight
     *
     * @param integer $second_weight
     * @return $this
     */
    public function setSecondWeight($second_weight)
    {
        $this->second_weight = $second_weight;

        return $this;
    }

    /**
     * Method to set the value of field first_price
     *
     * @param double $first_price
     * @return $this
     */
    public function setFirstPrice($first_price)
    {
        $this->first_price = $first_price;

        return $this;
    }

    /**
     * Method to set the value of field second_price
     *
     * @param double $second_price
     * @return $this
     */
    public function setSecondPrice($second_price)
    {
        $this->second_price = $second_price;

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
     * Method to set the value of field is_save_price
     *
     * @param integer $is_save_price
     * @return $this
     */
    public function setIsSavePrice($is_save_price)
    {
        $this->is_save_price = $is_save_price;

        return $this;
    }

    /**
     * Method to set the value of field save_rate
     *
     * @param double $save_rate
     * @return $this
     */
    public function setSaveRate($save_rate)
    {
        $this->save_rate = $save_rate;

        return $this;
    }

    /**
     * Method to set the value of field low_price
     *
     * @param double $low_price
     * @return $this
     */
    public function setLowPrice($low_price)
    {
        $this->low_price = $low_price;

        return $this;
    }

    /**
     * Method to set the value of field price_type
     *
     * @param integer $price_type
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $this->price_type = $price_type;

        return $this;
    }

    /**
     * Method to set the value of field open_default
     *
     * @param integer $open_default
     * @return $this
     */
    public function setOpenDefault($open_default)
    {
        $this->open_default = $open_default;

        return $this;
    }

    /**
     * Method to set the value of field is_delete
     *
     * @param integer $is_delete
     * @return $this
     */
    public function setIsDelete($is_delete)
    {
        $this->is_delete = $is_delete;

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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field area_groupid
     *
     * @return string
     */
    public function getAreaGroupid()
    {
        return $this->area_groupid;
    }

    /**
     * Returns the value of field firstprice
     *
     * @return string
     */
    public function getFirstprice()
    {
        return $this->firstprice;
    }

    /**
     * Returns the value of field secondprice
     *
     * @return string
     */
    public function getSecondprice()
    {
        return $this->secondprice;
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
     * Returns the value of field first_weight
     *
     * @return integer
     */
    public function getFirstWeight()
    {
        return $this->first_weight;
    }

    /**
     * Returns the value of field second_weight
     *
     * @return integer
     */
    public function getSecondWeight()
    {
        return $this->second_weight;
    }

    /**
     * Returns the value of field first_price
     *
     * @return double
     */
    public function getFirstPrice()
    {
        return $this->first_price;
    }

    /**
     * Returns the value of field second_price
     *
     * @return double
     */
    public function getSecondPrice()
    {
        return $this->second_price;
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
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Returns the value of field is_save_price
     *
     * @return integer
     */
    public function getIsSavePrice()
    {
        return $this->is_save_price;
    }

    /**
     * Returns the value of field save_rate
     *
     * @return double
     */
    public function getSaveRate()
    {
        return $this->save_rate;
    }

    /**
     * Returns the value of field low_price
     *
     * @return double
     */
    public function getLowPrice()
    {
        return $this->low_price;
    }

    /**
     * Returns the value of field price_type
     *
     * @return integer
     */
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * Returns the value of field open_default
     *
     * @return integer
     */
    public function getOpenDefault()
    {
        return $this->open_default;
    }

    /**
     * Returns the value of field is_delete
     *
     * @return integer
     */
    public function getIsDelete()
    {
        return $this->is_delete;
    }

    public function getSource()
    {
        return 'app_delivery';
    }

}
