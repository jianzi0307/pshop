<?php
/**
 * ----------------------
 * UnitTest.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/8
 * Time: 16:24
 * ----------------------
 */

namespace tests;

class TestUnitTest extends \AbsUnitTestCase {

    public function testTestCase() {
        $this->assertEquals('works',
            'works',
            'This is OK'
        );

        $this->assertEquals('works',
            'works',
            'This will fail'
        );
    }

}