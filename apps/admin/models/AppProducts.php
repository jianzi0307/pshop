<?php

namespace apps\admin\models;

class AppProducts extends Base
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
    protected $goods_id;

    /**
     *
     * @var string
     */
    protected $products_no;

    /**
     *
     * @var string
     */
    protected $spec_array;

    /**
     *
     * @var integer
     */
    protected $store_nums;

    /**
     *
     * @var double
     */
    protected $market_price;

    /**
     *
     * @var double
     */
    protected $sell_price;

    /**
     *
     * @var double
     */
    protected $cost_price;

    /**
     *
     * @var double
     */
    protected $weight;

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
     * Method to set the value of field goods_id
     *
     * @param integer $goods_id
     * @return $this
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;

        return $this;
    }

    /**
     * Method to set the value of field products_no
     *
     * @param string $products_no
     * @return $this
     */
    public function setProductsNo($products_no)
    {
        $this->products_no = $products_no;

        return $this;
    }

    /**
     * Method to set the value of field spec_array
     *
     * @param string $spec_array
     * @return $this
     */
    public function setSpecArray($spec_array)
    {
        $this->spec_array = $spec_array;

        return $this;
    }

    /**
     * Method to set the value of field store_nums
     *
     * @param integer $store_nums
     * @return $this
     */
    public function setStoreNums($store_nums)
    {
        $this->store_nums = $store_nums;

        return $this;
    }

    /**
     * Method to set the value of field market_price
     *
     * @param double $market_price
     * @return $this
     */
    public function setMarketPrice($market_price)
    {
        $this->market_price = $market_price;

        return $this;
    }

    /**
     * Method to set the value of field sell_price
     *
     * @param double $sell_price
     * @return $this
     */
    public function setSellPrice($sell_price)
    {
        $this->sell_price = $sell_price;

        return $this;
    }

    /**
     * Method to set the value of field cost_price
     *
     * @param double $cost_price
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->cost_price = $cost_price;

        return $this;
    }

    /**
     * Method to set the value of field weight
     *
     * @param double $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

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
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Returns the value of field products_no
     *
     * @return string
     */
    public function getProductsNo()
    {
        return $this->products_no;
    }

    /**
     * Returns the value of field spec_array
     *
     * @return string
     */
    public function getSpecArray()
    {
        return $this->spec_array;
    }

    /**
     * Returns the value of field store_nums
     *
     * @return integer
     */
    public function getStoreNums()
    {
        return $this->store_nums;
    }

    /**
     * Returns the value of field market_price
     *
     * @return double
     */
    public function getMarketPrice()
    {
        return $this->market_price;
    }

    /**
     * Returns the value of field sell_price
     *
     * @return double
     */
    public function getSellPrice()
    {
        return $this->sell_price;
    }

    /**
     * Returns the value of field cost_price
     *
     * @return double
     */
    public function getCostPrice()
    {
        return $this->cost_price;
    }

    /**
     * Returns the value of field weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('goods_id', 'apps\admin\models\App_goods', 'id', array('alias' => 'App_goods'));
        $this->belongsTo('goods_id', 'apps\admin\models\AppGoods', 'id', array('foreignKey' => true,'alias' => 'AppGoods'));
    }

    public function getSource()
    {
        return 'app_products';
    }

}
