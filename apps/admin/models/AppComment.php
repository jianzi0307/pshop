<?php

namespace apps\admin\models;

class AppComment extends Base
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
    protected $order_no;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var string
     */
    protected $comment_time;

    /**
     *
     * @var string
     */
    protected $contents;

    /**
     *
     * @var string
     */
    protected $recontents;

    /**
     *
     * @var string
     */
    protected $recomment_time;

    /**
     *
     * @var integer
     */
    protected $point;

    /**
     *
     * @var integer
     */
    protected $status;

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
     * Method to set the value of field order_no
     *
     * @param string $order_no
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->order_no = $order_no;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Method to set the value of field comment_time
     *
     * @param string $comment_time
     * @return $this
     */
    public function setCommentTime($comment_time)
    {
        $this->comment_time = $comment_time;

        return $this;
    }

    /**
     * Method to set the value of field contents
     *
     * @param string $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Method to set the value of field recontents
     *
     * @param string $recontents
     * @return $this
     */
    public function setRecontents($recontents)
    {
        $this->recontents = $recontents;

        return $this;
    }

    /**
     * Method to set the value of field recomment_time
     *
     * @param string $recomment_time
     * @return $this
     */
    public function setRecommentTime($recomment_time)
    {
        $this->recomment_time = $recomment_time;

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
     * Returns the value of field order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Returns the value of field comment_time
     *
     * @return string
     */
    public function getCommentTime()
    {
        return $this->comment_time;
    }

    /**
     * Returns the value of field contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Returns the value of field recontents
     *
     * @return string
     */
    public function getRecontents()
    {
        return $this->recontents;
    }

    /**
     * Returns the value of field recomment_time
     *
     * @return string
     */
    public function getRecommentTime()
    {
        return $this->recomment_time;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
        return 'app_comment';
    }

}
