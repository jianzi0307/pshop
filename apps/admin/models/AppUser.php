<?php

namespace apps\admin\models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class AppUser extends Base
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
    protected $username;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $head_ico;

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
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field head_ico
     *
     * @param string $head_ico
     * @return $this
     */
    public function setHeadIco($head_ico)
    {
        $this->head_ico = $head_ico;

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
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field head_ico
     *
     * @return string
     */
    public function getHeadIco()
    {
        return $this->head_ico;
    }

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_account_log', 'user_id', array('alias' => 'App_account_log'));
        $this->hasMany('id', 'apps\admin\models\App_address', 'user_id', array('alias' => 'App_address'));
        $this->hasMany('id', 'apps\admin\models\App_favorite', 'user_id', array('alias' => 'App_favorite'));
        $this->hasMany('id', 'apps\admin\models\App_find_password', 'user_id', array('alias' => 'App_find_password'));
        $this->hasMany('id', 'apps\admin\models\App_goods_car', 'user_id', array('alias' => 'App_goods_car'));
        $this->hasMany('id', 'apps\admin\models\App_member', 'user_id', array('alias' => 'App_member'));
        $this->hasMany('id', 'apps\admin\models\App_notify_registry', 'user_id', array('alias' => 'App_notify_registry'));
        $this->hasMany('id', 'apps\admin\models\App_oauth_user', 'user_id', array('alias' => 'App_oauth_user'));
        $this->hasMany('id', 'apps\admin\models\App_online_recharge', 'user_id', array('alias' => 'App_online_recharge'));
        $this->hasMany('id', 'apps\admin\models\App_point_log', 'user_id', array('alias' => 'App_point_log'));
        $this->hasMany('id', 'apps\admin\models\App_suggestion', 'user_id', array('alias' => 'App_suggestion'));
        $this->hasMany('id', 'apps\admin\models\App_withdraw', 'user_id', array('alias' => 'App_withdraw'));
        $this->hasMany('id', 'apps\admin\models\AppAccountLog', 'user_id', array('alias' => 'AppAccountLog'));
        $this->hasMany('id', 'apps\admin\models\AppAddress', 'user_id', array('alias' => 'AppAddress'));
        $this->hasMany('id', 'apps\admin\models\AppFavorite', 'user_id', array('alias' => 'AppFavorite'));
        $this->hasMany('id', 'apps\admin\models\AppFindPassword', 'user_id', array('alias' => 'AppFindPassword'));
        $this->hasMany('id', 'apps\admin\models\AppGoodsCar', 'user_id', array('alias' => 'AppGoodsCar'));
        $this->hasMany('id', 'apps\admin\models\AppMember', 'user_id', array('alias' => 'AppMember'));
        $this->hasMany('id', 'apps\admin\models\AppNotifyRegistry', 'user_id', array('alias' => 'AppNotifyRegistry'));
        $this->hasMany('id', 'apps\admin\models\AppOauthUser', 'user_id', array('alias' => 'AppOauthUser'));
        $this->hasMany('id', 'apps\admin\models\AppOnlineRecharge', 'user_id', array('alias' => 'AppOnlineRecharge'));
        $this->hasMany('id', 'apps\admin\models\AppPointLog', 'user_id', array('alias' => 'AppPointLog'));
        $this->hasMany('id', 'apps\admin\models\AppSuggestion', 'user_id', array('alias' => 'AppSuggestion'));
        $this->hasMany('id', 'apps\admin\models\AppWithdraw', 'user_id', array('alias' => 'AppWithdraw'));
    }

    public function getSource()
    {
        return 'app_user';
    }

}
