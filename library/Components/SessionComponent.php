<?php
/**
 * ----------------------
 * SessionComponent.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/1
 * Time: 13:17
 * ----------------------
 */

namespace library\Components;

use Phalcon\Mvc\User\Component;

/**
 * session组件
 * 在phalcon的session基础上做一层封装
 *
 * Class SessionComponent
 * @package library\Components
 */
class SessionComponent extends Component {

    //session前缀
    private $pre = 'shop_';

    //安全级别
    private $level = 'normal';

    /**
     * 设置前缀
     * @param $pre
     */
    public function setPre($pre) {
        $this->pre = $pre;
    }

    /**
     * 获取当前的安全级别
     * @return string
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * 设置session数据
     * @param $name
     * @param string $value
     */
    public function setSess( $name,$value='' ) {
        if($this->checkSafe() == -1) {
            $this->session->set($this->getPre().'safecode',$this->sessionId());
        }
        $this->session->set($this->getPre().$name,$value);
    }

    /**
     * 获取session数据
     * @param $name
     * @return mixed|null
     */
    public function get( $name ) {
        $is_checked = $this->checkSafe();
        if($is_checked == 1) {
            return $this->session->has($this->pre.$name) ? $this->session->get($this->pre.$name) : null;
        } else if( $is_checked == 0 ) {
            $this->clear($this->pre.'safecode');
        }
        return null;
    }

    /**
     * 清空某一个Session
     * @param $name
     */
    public function clear( $name ) {
        $this->pre = $this->getPre();
        $this->session->remove($this->pre.$name);
    }

    /**
     * 清空所有Session
     * @return bool
     */
    public function clearAll() {
        return $this->session->destroy();
    }

    /**
     * Session的安全验证
     * @return int
     */
    public function checkSafe() {
        $this->pre = $this->getPre();
        if( $this->session->has($this->pre.'safecode') ) {
            if( $this->session->get($this->pre.'safecode') == $this->sessionId() ) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }

    /**
     * 得到session的安全码
     * @return string
     */
    public function sessionId() {
        $level = $this->getLevel();
        if($level == 'none') {
            return '';
        } else if($level == 'normal') {
            return md5($this->request->getClientAddress());
        }
        return md5($this->request->getClientAddress().$this->request->getUserAgent());
    }

    /**
     * 获取配置的前缀
     * @return string
     */
    private function getPre() {
        return $this->pre;
    }
}