<?php

namespace apps\admin\models;

class AppSearch extends Base
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
    protected $keyword;

    /**
     *
     * @var integer
     */
    protected $num;

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
     * Method to set the value of field keyword
     *
     * @param string $keyword
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Method to set the value of field num
     *
     * @param integer $num
     * @return $this
     */
    public function setNum($num)
    {
        $this->num = $num;

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
     * Returns the value of field keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Returns the value of field num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }

    public function getSource()
    {
        return 'app_search';
    }

}
