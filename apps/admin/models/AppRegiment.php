<?php

namespace apps\admin\models;

class AppRegiment extends Base
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
    protected $title;

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
    protected $store_nums;

    /**
     *
     * @var integer
     */
    protected $sum_count;

    /**
     *
     * @var integer
     */
    protected $least_count;

    /**
     *
     * @var string
     */
    protected $intro;

    /**
     *
     * @var integer
     */
    protected $is_close;

    /**
     *
     * @var double
     */
    protected $regiment_price;

    /**
     *
     * @var double
     */
    protected $sell_price;

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
    protected $sort;

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
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * Method to set the value of field sum_count
     *
     * @param integer $sum_count
     * @return $this
     */
    public function setSumCount($sum_count)
    {
        $this->sum_count = $sum_count;

        return $this;
    }

    /**
     * Method to set the value of field least_count
     *
     * @param integer $least_count
     * @return $this
     */
    public function setLeastCount($least_count)
    {
        $this->least_count = $least_count;

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
     * Method to set the value of field regiment_price
     *
     * @param double $regiment_price
     * @return $this
     */
    public function setRegimentPrice($regiment_price)
    {
        $this->regiment_price = $regiment_price;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * Returns the value of field store_nums
     *
     * @return integer
     */
    public function getStoreNums()
    {
        return $this->store_nums;
    }

    /**
     * Returns the value of field sum_count
     *
     * @return integer
     */
    public function getSumCount()
    {
        return $this->sum_count;
    }

    /**
     * Returns the value of field least_count
     *
     * @return integer
     */
    public function getLeastCount()
    {
        return $this->least_count;
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
     * Returns the value of field is_close
     *
     * @return integer
     */
    public function getIsClose()
    {
        return $this->is_close;
    }

    /**
     * Returns the value of field regiment_price
     *
     * @return double
     */
    public function getRegimentPrice()
    {
        return $this->regiment_price;
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
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_regiment_user_relation', 'regiment_id', array('alias' => 'App_regiment_user_relation'));
        $this->belongsTo('goods_id', 'apps\admin\models\App_goods', 'id', array('alias' => 'App_goods'));
        $this->hasMany('id', 'apps\admin\models\AppRegimentUserRelation', 'regiment_id', array('alias' => 'AppRegimentUserRelation'));
        $this->belongsTo('goods_id', 'apps\admin\models\AppGoods', 'id', array('foreignKey' => true,'alias' => 'AppGoods'));
    }

    public function getSource()
    {
        return 'app_regiment';
    }

}
