<?php
/**
 * ----------------------
 * UnitTestCase.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/8
 * Time: 16:33
 * ----------------------
 */

//namespace tests;

use Phalcon\Config;
use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;
use Phalcon\DiInterface;

abstract class AbsUnitTestCase extends PhalconTestCase {

    /**
     */
    protected $_cache;

    /**
     * @var \Phalcon\Config
     */
    protected $_config;

    /**
     * @var bool
     */
    private $_loaded = false;

    public function setUp(DiInterface $di = NULL ,Config $config = NULL) {
        $di = DI::getDefault();

        parent::setUp($di);
        $this->_loaded = true;
    }

    /**
     * Check if the test case is setup properly
     * @throws \PHPUnit_Framework_IncompleteTestError;
     */
    public function __destruct() {
        if(!$this->_loaded) {
            throw new \PHPUnit_Framework_IncompleteTestError('Please run parent::setUp().');
        }
    }
}