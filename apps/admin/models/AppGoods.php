<?php

namespace apps\admin\models;

class AppGoods extends Base
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
    protected $goods_no;

    /**
     *
     * @var integer
     */
    protected $model_id;

    /**
     *
     * @var double
     */
    protected $sell_price;

    /**
     *
     * @var double
     */
    protected $market_price;

    /**
     *
     * @var double
     */
    protected $cost_price;

    /**
     *
     * @var string
     */
    protected $up_time;

    /**
     *
     * @var string
     */
    protected $down_time;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var integer
     */
    protected $store_nums;

    /**
     *
     * @var string
     */
    protected $img;

    /**
     *
     * @var string
     */
    protected $ad_img;

    /**
     *
     * @var integer
     */
    protected $is_del;

    /**
     *
     * @var string
     */
    protected $content;

    /**
     *
     * @var string
     */
    protected $keywords;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $search_words;

    /**
     *
     * @var double
     */
    protected $weight;

    /**
     *
     * @var integer
     */
    protected $point;

    /**
     *
     * @var string
     */
    protected $unit;

    /**
     *
     * @var integer
     */
    protected $brand_id;

    /**
     *
     * @var integer
     */
    protected $visit;

    /**
     *
     * @var integer
     */
    protected $favorite;

    /**
     *
     * @var integer
     */
    protected $sort;

    /**
     *
     * @var string
     */
    protected $spec_array;

    /**
     *
     * @var integer
     */
    protected $exp;

    /**
     *
     * @var integer
     */
    protected $comments;

    /**
     *
     * @var integer
     */
    protected $sale;

    /**
     *
     * @var integer
     */
    protected $grade;

    /**
     *
     * @var integer
     */
    protected $seller_id;

    /**
     *
     * @var integer
     */
    protected $is_share;

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
     * Method to set the value of field goods_no
     *
     * @param string $goods_no
     * @return $this
     */
    public function setGoodsNo($goods_no)
    {
        $this->goods_no = $goods_no;

        return $this;
    }

    /**
     * Method to set the value of field model_id
     *
     * @param integer $model_id
     * @return $this
     */
    public function setModelId($model_id)
    {
        $this->model_id = $model_id;

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
     * Method to set the value of field up_time
     *
     * @param string $up_time
     * @return $this
     */
    public function setUpTime($up_time)
    {
        $this->up_time = $up_time;

        return $this;
    }

    /**
     * Method to set the value of field down_time
     *
     * @param string $down_time
     * @return $this
     */
    public function setDownTime($down_time)
    {
        $this->down_time = $down_time;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param string $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

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
     * Method to set the value of field ad_img
     *
     * @param string $ad_img
     * @return $this
     */
    public function setAdImg($ad_img)
    {
        $this->ad_img = $ad_img;

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
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field keywords
     *
     * @param string $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

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
     * Method to set the value of field search_words
     *
     * @param string $search_words
     * @return $this
     */
    public function setSearchWords($search_words)
    {
        $this->search_words = $search_words;

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
     * Method to set the value of field point
     *
     * @param integer $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Method to set the value of field unit
     *
     * @param string $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Method to set the value of field brand_id
     *
     * @param integer $brand_id
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Method to set the value of field visit
     *
     * @param integer $visit
     * @return $this
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;

        return $this;
    }

    /**
     * Method to set the value of field favorite
     *
     * @param integer $favorite
     * @return $this
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;

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
     * Method to set the value of field exp
     *
     * @param integer $exp
     * @return $this
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Method to set the value of field comments
     *
     * @param integer $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Method to set the value of field sale
     *
     * @param integer $sale
     * @return $this
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Method to set the value of field grade
     *
     * @param integer $grade
     * @return $this
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Method to set the value of field seller_id
     *
     * @param integer $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;

        return $this;
    }

    /**
     * Method to set the value of field is_share
     *
     * @param integer $is_share
     * @return $this
     */
    public function setIsShare($is_share)
    {
        $this->is_share = $is_share;

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
     * Returns the value of field goods_no
     *
     * @return string
     */
    public function getGoodsNo()
    {
        return $this->goods_no;
    }

    /**
     * Returns the value of field model_id
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->model_id;
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
     * Returns the value of field market_price
     *
     * @return double
     */
    public function getMarketPrice()
    {
        return $this->market_price;
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
     * Returns the value of field up_time
     *
     * @return string
     */
    public function getUpTime()
    {
        return $this->up_time;
    }

    /**
     * Returns the value of field down_time
     *
     * @return string
     */
    public function getDownTime()
    {
        return $this->down_time;
    }

    /**
     * Returns the value of field create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
     * Returns the value of field img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Returns the value of field ad_img
     *
     * @return string
     */
    public function getAdImg()
    {
        return $this->ad_img;
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

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
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
     * Returns the value of field search_words
     *
     * @return string
     */
    public function getSearchWords()
    {
        return $this->search_words;
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
     * Returns the value of field point
     *
     * @return integer
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Returns the value of field unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Returns the value of field brand_id
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Returns the value of field visit
     *
     * @return integer
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * Returns the value of field favorite
     *
     * @return integer
     */
    public function getFavorite()
    {
        return $this->favorite;
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
     * Returns the value of field spec_array
     *
     * @return string
     */
    public function getSpecArray()
    {
        return $this->spec_array;
    }

    /**
     * Returns the value of field exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Returns the value of field comments
     *
     * @return integer
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Returns the value of field sale
     *
     * @return integer
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Returns the value of field grade
     *
     * @return integer
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Returns the value of field seller_id
     *
     * @return integer
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * Returns the value of field is_share
     *
     * @return integer
     */
    public function getIsShare()
    {
        return $this->is_share;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_category_extend', 'goods_id', array('alias' => 'App_category_extend'));
        $this->hasMany('id', 'apps\admin\models\App_commend_goods', 'goods_id', array('alias' => 'App_commend_goods'));
        $this->hasMany('id', 'apps\admin\models\App_comment', 'goods_id', array('alias' => 'App_comment'));
        $this->hasMany('id', 'apps\admin\models\App_discussion', 'goods_id', array('alias' => 'App_discussion'));
        $this->hasMany('id', 'apps\admin\models\App_favorite', 'rid', array('alias' => 'App_favorite'));
        $this->hasMany('id', 'apps\admin\models\App_goods_attribute', 'goods_id', array('alias' => 'App_goods_attribute'));
        $this->hasMany('id', 'apps\admin\models\App_goods_photo_relation', 'goods_id', array('alias' => 'App_goods_photo_relation'));
        $this->hasMany('id', 'apps\admin\models\App_group_price', 'goods_id', array('alias' => 'App_group_price'));
        $this->hasMany('id', 'apps\admin\models\App_notify_registry', 'goods_id', array('alias' => 'App_notify_registry'));
        $this->hasMany('id', 'apps\admin\models\App_products', 'goods_id', array('alias' => 'App_products'));
        $this->hasMany('id', 'apps\admin\models\App_refer', 'goods_id', array('alias' => 'App_refer'));
        $this->hasMany('id', 'apps\admin\models\App_regiment', 'goods_id', array('alias' => 'App_regiment'));
        $this->hasMany('id', 'apps\admin\models\App_relation', 'goods_id', array('alias' => 'App_relation'));
        $this->hasMany('id', 'apps\admin\models\AppCategoryExtend', 'goods_id', array('alias' => 'AppCategoryExtend'));
        $this->hasMany('id', 'apps\admin\models\AppCommendGoods', 'goods_id', array('alias' => 'AppCommendGoods'));
        $this->hasMany('id', 'apps\admin\models\AppComment', 'goods_id', array('alias' => 'AppComment'));
        $this->hasMany('id', 'apps\admin\models\AppDiscussion', 'goods_id', array('alias' => 'AppDiscussion'));
        $this->hasMany('id', 'apps\admin\models\AppFavorite', 'rid', array('alias' => 'AppFavorite'));
        $this->hasMany('id', 'apps\admin\models\AppGoodsAttribute', 'goods_id', array('alias' => 'AppGoodsAttribute'));
        $this->hasMany('id', 'apps\admin\models\AppGoodsPhotoRelation', 'goods_id', array('alias' => 'AppGoodsPhotoRelation'));
        $this->hasMany('id', 'apps\admin\models\AppGroupPrice', 'goods_id', array('alias' => 'AppGroupPrice'));
        $this->hasMany('id', 'apps\admin\models\AppNotifyRegistry', 'goods_id', array('alias' => 'AppNotifyRegistry'));
        $this->hasMany('id', 'apps\admin\models\AppProducts', 'goods_id', array('alias' => 'AppProducts'));
        $this->hasMany('id', 'apps\admin\models\AppRefer', 'goods_id', array('alias' => 'AppRefer'));
        $this->hasMany('id', 'apps\admin\models\AppRegiment', 'goods_id', array('alias' => 'AppRegiment'));
        $this->hasMany('id', 'apps\admin\models\AppRelation', 'goods_id', array('alias' => 'AppRelation'));
    }

    public function getSource()
    {
        return 'app_goods';
    }

}
