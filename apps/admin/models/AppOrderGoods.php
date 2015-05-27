<?php

namespace apps\admin\models;

class AppOrderGoods extends Base
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
    protected $order_id;

    /**
     *
     * @var integer
     */
    protected $goods_id;

    /**
     *
     * @var string
     */
    protected $img;

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     *
     * @var double
     */
    protected $goods_price;

    /**
     *
     * @var double
     */
    protected $real_price;

    /**
     *
     * @var integer
     */
    protected $goods_nums;

    /**
     *
     * @var double
     */
    protected $goods_weight;

    /**
     *
     * @var string
     */
    protected $goods_array;

    /**
     *
     * @var integer
     */
    protected $is_send;

    /**
     *
     * @var integer
     */
    protected $is_checkout;

    /**
     *
     * @var integer
     */
    protected $delivery_id;

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
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

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
     * Method to set the value of field product_id
     *
     * @param integer $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Method to set the value of field goods_price
     *
     * @param double $goods_price
     * @return $this
     */
    public function setGoodsPrice($goods_price)
    {
        $this->goods_price = $goods_price;

        return $this;
    }

    /**
     * Method to set the value of field real_price
     *
     * @param double $real_price
     * @return $this
     */
    public function setRealPrice($real_price)
    {
        $this->real_price = $real_price;

        return $this;
    }

    /**
     * Method to set the value of field goods_nums
     *
     * @param integer $goods_nums
     * @return $this
     */
    public function setGoodsNums($goods_nums)
    {
        $this->goods_nums = $goods_nums;

        return $this;
    }

    /**
     * Method to set the value of field goods_weight
     *
     * @param double $goods_weight
     * @return $this
     */
    public function setGoodsWeight($goods_weight)
    {
        $this->goods_weight = $goods_weight;

        return $this;
    }

    /**
     * Method to set the value of field goods_array
     *
     * @param string $goods_array
     * @return $this
     */
    public function setGoodsArray($goods_array)
    {
        $this->goods_array = $goods_array;

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
     * Method to set the value of field is_checkout
     *
     * @param integer $is_checkout
     * @return $this
     */
    public function setIsCheckout($is_checkout)
    {
        $this->is_checkout = $is_checkout;

        return $this;
    }

    /**
     * Method to set the value of field delivery_id
     *
     * @param integer $delivery_id
     * @return $this
     */
    public function setDeliveryId($delivery_id)
    {
        $this->delivery_id = $delivery_id;

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
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
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
     * Returns the value of field img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Returns the value of field product_id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Returns the value of field goods_price
     *
     * @return double
     */
    public function getGoodsPrice()
    {
        return $this->goods_price;
    }

    /**
     * Returns the value of field real_price
     *
     * @return double
     */
    public function getRealPrice()
    {
        return $this->real_price;
    }

    /**
     * Returns the value of field goods_nums
     *
     * @return integer
     */
    public function getGoodsNums()
    {
        return $this->goods_nums;
    }

    /**
     * Returns the value of field goods_weight
     *
     * @return double
     */
    public function getGoodsWeight()
    {
        return $this->goods_weight;
    }

    /**
     * Returns the value of field goods_array
     *
     * @return string
     */
    public function getGoodsArray()
    {
        return $this->goods_array;
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

    /**
     * Returns the value of field is_checkout
     *
     * @return integer
     */
    public function getIsCheckout()
    {
        return $this->is_checkout;
    }

    /**
     * Returns the value of field delivery_id
     *
     * @return integer
     */
    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('order_id', 'apps\admin\models\App_order', 'id', array('alias' => 'App_order'));
        $this->belongsTo('order_id', 'apps\admin\models\AppOrder', 'id', array('foreignKey' => true,'alias' => 'AppOrder'));
    }

    public function getSource()
    {
        return 'app_order_goods';
    }

}
