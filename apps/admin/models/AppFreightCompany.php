<?php

namespace apps\admin\models;

class AppFreightCompany extends Base
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
    protected $freight_type;

    /**
     *
     * @var string
     */
    protected $freight_name;

    /**
     *
     * @var string
     */
    protected $url;

    /**
     *
     * @var integer
     */
    protected $sort;

    /**
     *
     * @var integer
     */
    protected $is_del;

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
     * Method to set the value of field freight_type
     *
     * @param string $freight_type
     * @return $this
     */
    public function setFreightType($freight_type)
    {
        $this->freight_type = $freight_type;

        return $this;
    }

    /**
     * Method to set the value of field freight_name
     *
     * @param string $freight_name
     * @return $this
     */
    public function setFreightName($freight_name)
    {
        $this->freight_name = $freight_name;

        return $this;
    }

    /**
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field freight_type
     *
     * @return string
     */
    public function getFreightType()
    {
        return $this->freight_type;
    }

    /**
     * Returns the value of field freight_name
     *
     * @return string
     */
    public function getFreightName()
    {
        return $this->freight_name;
    }

    /**
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * Returns the value of field is_del
     *
     * @return integer
     */
    public function getIsDel()
    {
        return $this->is_del;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_delivery_doc', 'freight_id', array('alias' => 'App_delivery_doc'));
        $this->hasMany('id', 'apps\admin\models\AppDeliveryDoc', 'freight_id', array('alias' => 'AppDeliveryDoc'));
    }

    public function getSource()
    {
        return 'app_freight_company';
    }

}
