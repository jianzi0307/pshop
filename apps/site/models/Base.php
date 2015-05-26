<?php
/**
 * ----------------------
 * Base.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/25
 * Time: 11:47
 * ----------------------
 */

namespace apps\site\models;


use Phalcon\Mvc\Model;

class Base extends Model{
    public function initialize() {
        $this->setWriteConnectionService('dbMaster');
        $this->setReadConnectionService('dbSlave');
    }
}