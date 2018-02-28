<?php

/**
 * 
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * 
 */
class FooTest extends \PHPUnit_FrameWork_TestCase {

    public function test() {
        $this->assertEquals('stub', 'stub');
    }

     public function testGetFirstName() {
        $user = new \Acme\Foo;
        $this->assertEquals($user->go(),'Billy');
    }
}
