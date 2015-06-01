<?php

namespace apps\admin\models;

class AppCommendGoods extends Base
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
    protected $commend_id;

    /**
     *
     * @var integer
     */
    protected $goods_id;

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
     * Method to set the value of field commend_id
     *
     * @param integer $commend_id
     * @return $this
     */
    public function setCommendId($commend_id)
    {
        $this->commend_id = $commend_id;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field commend_id
     *
     * @return integer
     */
    public function getCommendId()
    {
        return $this->commend_id;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('goods_id', 'apps\admin\models\App_goods', 'id', array('alias' => 'App_goods'));
        $this->belongsTo('goods_id', 'apps\admin\models\AppGoods', 'id', array('foreignKey' => true,'alias' => 'AppGoods'));
    }

    public function getSource()
    {
        return 'app_commend_goods';
    }

}
