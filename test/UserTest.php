<?php

/**
 * 
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * 
 */
class UserTest extends \PHPUnit_FrameWork_TestCase {

    public function testGetFirstName() {
        $user = new \user\User;
        $this->assertEquals($user->getFirstName(),'Billy');
    }

}
