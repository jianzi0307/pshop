<?php

namespace apps\admin\models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class AppSeller extends Base
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
    protected $seller_name;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var string
     */
    protected $create_time;

    /**
     *
     * @var string
     */
    protected $login_time;

    /**
     *
     * @var integer
     */
    protected $is_vip;

    /**
     *
     * @var integer
     */
    protected $is_del;

    /**
     *
     * @var integer
     */
    protected $is_lock;

    /**
     *
     * @var string
     */
    protected $true_name;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $mobile;

    /**
     *
     * @var string
     */
    protected $phone;

    /**
     *
     * @var string
     */
    protected $paper_img;

    /**
     *
     * @var double
     */
    protected $cash;

    /**
     *
     * @var integer
     */
    protected $country;

    /**
     *
     * @var integer
     */
    protected $province;

    /**
     *
     * @var integer
     */
    protected $city;

    /**
     *
     * @var integer
     */
    protected $area;

    /**
     *
     * @var string
     */
    protected $address;

    /**
     *
     * @var string
     */
    protected $account;

    /**
     *
     * @var string
     */
    protected $server_num;

    /**
     *
     * @var string
     */
    protected $home_url;

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
     * Method to set the value of field seller_name
     *
     * @param string $seller_name
     * @return $this
     */
    public function setSellerName($seller_name)
    {
        $this->seller_name = $seller_name;

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
     * Method to set the value of field login_time
     *
     * @param string $login_time
     * @return $this
     */
    public function setLoginTime($login_time)
    {
        $this->login_time = $login_time;

        return $this;
    }

    /**
     * Method to set the value of field is_vip
     *
     * @param integer $is_vip
     * @return $this
     */
    public function setIsVip($is_vip)
    {
        $this->is_vip = $is_vip;

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
     * Method to set the value of field is_lock
     *
     * @param integer $is_lock
     * @return $this
     */
    public function setIsLock($is_lock)
    {
        $this->is_lock = $is_lock;

        return $this;
    }

    /**
     * Method to set the value of field true_name
     *
     * @param string $true_name
     * @return $this
     */
    public function setTrueName($true_name)
    {
        $this->true_name = $true_name;

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
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Method to set the value of field paper_img
     *
     * @param string $paper_img
     * @return $this
     */
    public function setPaperImg($paper_img)
    {
        $this->paper_img = $paper_img;

        return $this;
    }

    /**
     * Method to set the value of field cash
     *
     * @param double $cash
     * @return $this
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param integer $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field province
     *
     * @param integer $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Method to set the value of field city
     *
     * @param integer $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Method to set the value of field area
     *
     * @param integer $area
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field account
     *
     * @param string $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Method to set the value of field server_num
     *
     * @param string $server_num
     * @return $this
     */
    public function setServerNum($server_num)
    {
        $this->server_num = $server_num;

        return $this;
    }

    /**
     * Method to set the value of field home_url
     *
     * @param string $home_url
     * @return $this
     */
    public function setHomeUrl($home_url)
    {
        $this->home_url = $home_url;

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
     * Returns the value of field seller_name
     *
     * @return string
     */
    public function getSellerName()
    {
        return $this->seller_name;
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
     * Returns the value of field create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Returns the value of field login_time
     *
     * @return string
     */
    public function getLoginTime()
    {
        return $this->login_time;
    }

    /**
     * Returns the value of field is_vip
     *
     * @return integer
     */
    public function getIsVip()
    {
        return $this->is_vip;
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
     * Returns the value of field is_lock
     *
     * @return integer
     */
    public function getIsLock()
    {
        return $this->is_lock;
    }

    /**
     * Returns the value of field true_name
     *
     * @return string
     */
    public function getTrueName()
    {
        return $this->true_name;
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
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Returns the value of field paper_img
     *
     * @return string
     */
    public function getPaperImg()
    {
        return $this->paper_img;
    }

    /**
     * Returns the value of field cash
     *
     * @return double
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Returns the value of field country
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field province
     *
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Returns the value of field city
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the value of field area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Returns the value of field server_num
     *
     * @return string
     */
    public function getServerNum()
    {
        return $this->server_num;
    }

    /**
     * Returns the value of field home_url
     *
     * @return string
     */
    public function getHomeUrl()
    {
        return $this->home_url;
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
        $this->hasMany('id', 'apps\admin\models\App_bill', 'seller_id', array('alias' => 'App_bill'));
        $this->hasMany('id', 'apps\admin\models\AppBill', 'seller_id', array('alias' => 'AppBill'));
    }

    public function getSource()
    {
        return 'app_seller';
    }

}
