<?php

namespace apps\admin\models;

class AppFavorite extends Base
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
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $rid;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var string
     */
    protected $summary;

    /**
     *
     * @var integer
     */
    protected $cat_id;

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
     * Method to set the value of field rid
     *
     * @param integer $rid
     * @return $this
     */
    public function setRid($rid)
    {
        $this->rid = $rid;

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
     * Method to set the value of field summary
     *
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Method to set the value of field cat_id
     *
     * @param integer $cat_id
     * @return $this
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field rid
     *
     * @return integer
     */
    public function getRid()
    {
        return $this->rid;
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
     * Returns the value of field summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Returns the value of field cat_id
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('rid', 'apps\admin\models\App_goods', 'id', array('alias' => 'App_goods'));
        $this->belongsTo('user_id', 'apps\admin\models\App_user', 'id', array('alias' => 'App_user'));
        $this->belongsTo('rid', 'apps\admin\models\AppGoods', 'id', array('foreignKey' => true,'alias' => 'AppGoods'));
        $this->belongsTo('user_id', 'apps\admin\models\AppUser', 'id', array('foreignKey' => true,'alias' => 'AppUser'));
    }

    public function getSource()
    {
        return 'app_favorite';
    }

}
