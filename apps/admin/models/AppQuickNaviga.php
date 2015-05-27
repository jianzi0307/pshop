<?php

namespace apps\admin\models;

class AppQuickNaviga extends Base
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
    protected $admin_id;

    /**
     *
     * @var string
     */
    protected $naviga_name;

    /**
     *
     * @var string
     */
    protected $url;

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
     * Method to set the value of field admin_id
     *
     * @param integer $admin_id
     * @return $this
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * Method to set the value of field naviga_name
     *
     * @param string $naviga_name
     * @return $this
     */
    public function setNavigaName($naviga_name)
    {
        $this->naviga_name = $naviga_name;

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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Returns the value of field naviga_name
     *
     * @return string
     */
    public function getNavigaName()
    {
        return $this->naviga_name;
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
        $this->belongsTo('admin_id', 'apps\admin\models\App_admin', 'id', array('alias' => 'App_admin'));
        $this->belongsTo('admin_id', 'apps\admin\models\AppAdmin', 'id', array('foreignKey' => true,'alias' => 'AppAdmin'));
    }

    public function getSource()
    {
        return 'app_quick_naviga';
    }

}
