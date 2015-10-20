<?php
/**
 * ----------------------
 * CacheComponent.php
 *
 * User: jian0307@icloud.com
 * Date: 2015/6/9
 * Time: 13:58
 * ----------------------
 */

namespace library\Components;

/*
* Place includes, constant defines and $_GLOBAL settings here.
* Make sure they have appropriate docblocks to avoid phpDocumentor
* construing they are documented by the page-level docblock.
*/
use Phalcon\Cache\Backend\File;
use Phalcon\Cache\Backend\Memcache;
use Phalcon\Cache\Frontend\Data;
use Phalcon\Mvc\User\Component;

/**
 * Class Cache
 * @package library\Components
 */
class Cache extends Component
{
    private $Cache = '';
    private $config = '';

    public function __construct()
    {
        $this->config = $this->di->get('config');
        if (!$this->config->cache->status) {
            return false;
        }
        if (class_exists('Memcache') && $this->config->cache->memcache) { // if active memcache
            $frontCache = new Data(array(
                "lifetime" => 172800
            ));
            $this->Cache = new Memcache($frontCache, array(
                'host' => 'localhost',
                'port' => 11211,
                'persistent' => false
            ));
        } else { // or use file cache
            $frontCache = new Data(array(
                "lifetime" => 3600
            ));
            $this->Cache = new File($frontCache, array(
                "cacheDir" => "../../cache/data/" // cache folder  /[phalcondir]/var/cache/data
            ));
        }
    }

    /**
     * 获取缓存值
     * @param $key
     * @return bool|mixed
     */
    public function get($key)
    {
        if (!$this->config->cache->status) {
            return false;
        }
        return $this->Cache->get(sha1($key));
    }

    /**
     * 设置缓存
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value)
    {
        if (!$this->config->cache->status) {
            return false;
        }
        $this->Cache->save(sha1($key), $value);
    }

    /**
     * 获取状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->config->cache->status;
    }
}
