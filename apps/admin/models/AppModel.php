<?php

namespace apps\admin\models;

class AppModel extends Base
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
    protected $spec_ids;

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
     * Method to set the value of field spec_ids
     *
     * @param string $spec_ids
     * @return $this
     */
    public function setSpecIds($spec_ids)
    {
        $this->spec_ids = $spec_ids;

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
     * Returns the value of field spec_ids
     *
     * @return string
     */
    public function getSpecIds()
    {
        return $this->spec_ids;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'apps\admin\models\App_attribute', 'model_id', array('alias' => 'App_attribute'));
        $this->hasMany('id', 'apps\admin\models\AppAttribute', 'model_id', array('alias' => 'AppAttribute'));
    }

    public function getSource()
    {
        return 'app_model';
    }

}
