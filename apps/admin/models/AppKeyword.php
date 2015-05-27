<?php

namespace apps\admin\models;

class AppKeyword extends Base
{

    /**
     *
     * @var string
     */
    protected $word;

    /**
     *
     * @var integer
     */
    protected $goods_nums;

    /**
     *
     * @var integer
     */
    protected $hot;

    /**
     *
     * @var integer
     */
    protected $order;

    /**
     * Method to set the value of field word
     *
     * @param string $word
     * @return $this
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Method to set the value of field goods_nums
     *
     * @param integer $goods_nums
     * @return $this
     */
    public function setGoodsNums($goods_nums)
    {
        $this->goods_nums = $goods_nums;

        return $this;
    }

    /**
     * Method to set the value of field hot
     *
     * @param integer $hot
     * @return $this
     */
    public function setHot($hot)
    {
        $this->hot = $hot;

        return $this;
    }

    /**
     * Method to set the value of field order
     *
     * @param integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Returns the value of field word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Returns the value of field goods_nums
     *
     * @return integer
     */
    public function getGoodsNums()
    {
        return $this->goods_nums;
    }

    /**
     * Returns the value of field hot
     *
     * @return integer
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * Returns the value of field order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    public function getSource()
    {
        return 'app_keyword';
    }

}
