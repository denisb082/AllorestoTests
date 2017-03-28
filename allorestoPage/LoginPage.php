<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 13:45
 */

class LogInPage extends BasePageMy {

    protected $logInEmailField;
    protected $logInPasswordField;
    protected $logInSubmitButton;

    public function __construct(PHPUnit_Extensions_Selenium2TestCase $driver)
    {
        parent::__construct($driver);
    }

    public function getLogInEmailField() {
        return $this->logInEmailField = $this->find('//*[@type="email" and @name="login-email"]');
    }

    public function getLogInPasswordField() {
        return $this->logInPasswordField = $this->find('//*[@type="password" and @name="login-password"]');
    }

    public function getLogInSubmitButton() {
        return $this->logInSubmitButton = $this->find('//*[@class="button submit" and @name="do-login"]');
    }

    public function getCurrentUserNameTitle(){
        return $this->find('//*[@title="Bonjour testD001 testD001"]');
    }

    public function fillLoginForm()
    {
       $this->getLogInEmailField()->value(LoginData::$loginEmail);
       $this->getLogInPasswordField()->value(LoginData::$password);
       $this->getLogInSubmitButton()->click();
    }
}