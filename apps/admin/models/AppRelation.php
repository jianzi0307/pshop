<?php

namespace apps\admin\models;

class AppRelation extends Base
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
     * @var integer
     */
    protected $article_id;

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
     * Method to set the value of field article_id
     *
     * @param integer $article_id
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->article_id = $article_id;

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
     * Returns the value of field article_id
     *
     * @return integer
     */
    public function getArticleId()
    {
        return $this->article_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('article_id', 'apps\admin\models\App_article', 'id', array('alias' => 'App_article'));
        $this->belongsTo('goods_id', 'apps\admin\models\App_goods', 'id', array('alias' => 'App_goods'));
        $this->belongsTo('article_id', 'apps\admin\models\AppArticle', 'id', array('foreignKey' => true,'alias' => 'AppArticle'));
        $this->belongsTo('goods_id', 'apps\admin\models\AppGoods', 'id', array('foreignKey' => true,'alias' => 'AppGoods'));
    }

    public function getSource()
    {
        return 'app_relation';
    }

}