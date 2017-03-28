<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 18:28
 */
class SignUpAndLoginTest extends BaseTest {

    public function testSignUp(){
        $assertion = new BaseTest($this->assert);
        $signUpPage = new SignUpPage($this->driver);
        $signUpPage->fillSignUpForm();
        $assertion->assert->assertEquals("Expected res", $signUpPage->getNewUserNameTitle() );
    }

    public function testLogin(){
        $assertion = new BaseTest($this->assert);
        $loginPage = new LogInPage($this->driver);
        $loginPage->fillLoginForm();
        $assertion->assert->assertEquals("Expected res", $loginPage->getCurrentUserNameTitle() );

    }
}