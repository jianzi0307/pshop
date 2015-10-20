<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/5/26
 * Time: 下午11:58
 */
namespace apps\admin\models;

use Phalcon\Mvc\Model;

class Base extends Model
{
    /*
    public function initialize() {
        $this->setReadConnectionService('dbSlave');
        $this->setWriteConnectionService('dbMaster');
    }

    public function selectReadConnection($intermediate, $bindParams, $bindTypes) {
        return $this->getDI()->get('dbMaster');
    } */
}
