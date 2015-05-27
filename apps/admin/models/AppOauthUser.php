<?php

namespace apps\admin\models;

class AppOauthUser extends Base
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
    protected $oauth_user_id;

    /**
     *
     * @var integer
     */
    protected $oauth_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $datetime;

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
     * Method to set the value of field oauth_user_id
     *
     * @param string $oauth_user_id
     * @return $this
     */
    public function setOauthUserId($oauth_user_id)
    {
        $this->oauth_user_id = $oauth_user_id;

        return $this;
    }

    /**
     * Method to set the value of field oauth_id
     *
     * @param integer $oauth_id
     * @return $this
     */
    public function setOauthId($oauth_id)
    {
        $this->oauth_id = $oauth_id;

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
     * Method to set the value of field datetime
     *
     * @param string $datetime
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

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
     * Returns the value of field oauth_user_id
     *
     * @return string
     */
    public function getOauthUserId()
    {
        return $this->oauth_user_id;
    }

    /**
     * Returns the value of field oauth_id
     *
     * @return integer
     */
    public function getOauthId()
    {
        return $this->oauth_id;
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
     * Returns the value of field datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_id', 'apps\admin\models\App_user', 'id', array('alias' => 'App_user'));
        $this->belongsTo('user_id', 'apps\admin\models\AppUser', 'id', array('foreignKey' => true,'alias' => 'AppUser'));
    }

    public function getSource()
    {
        return 'app_oauth_user';
    }

}
