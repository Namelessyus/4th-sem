<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/function.php';

class LoginTest extends TestCase{

//1 correct user name and password
    public function testValidLogin()
    {
        $this->assertEquals("Login successfull", doLogin("admin","1234"));
    }

    //2 Incorrrect Password
    public function testInvalidUsername()
    {
        $this->assertEquals("Login failed", doLogin("user","1234"));
    }

    //3 Incorrect Password
    public function testInvalidPassword()
    {
        $this->assertEquals("Login failed", dologin("admin","wrong"));
    }

    //4 Both useername and password incorrect
    public function testInvalidUsernameandPassword()
    {
        $this->assertEquals("Login failed", dologin("user","wrong"));
    }

    //5 Empty Username
      public function testEmptyUsername()
    {
        $this->assertEquals("Login failed", dologin("","1234"));
    }

}