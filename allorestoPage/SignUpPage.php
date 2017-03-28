<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 13:33
 */
class SignUpPage extends BasePageMy {

    public function __construct(PHPUnit_Extensions_Selenium2TestCase $driver)
    {
        parent::__construct($driver);
    }

    public function getSignUpNameField(){
        return $this->find('//*[@name="register-last-name"]');
    }

    public function getSignUpLastNameField(){
        return $this->find('//*[@name="register-first-name"]');
    }

    public function getSignUpEmailField(){
        return $this->find('//*[@name="register-email" and @type="email"]');
    }

    public function getSignUpPasswordField(){
        return $this->find('//*[@type="password" and @name="register-password"]');
    }

    public function getSignUpTermsCheckBox(){
        return $this->find('//*[@type="checkbox" and @name="register-accept-terms"]');
    }

    public function getSignUpSubscribeCheckBox(){
        return $this->find('.//*[@type="checkbox" and @name="register-subscribe"]');
    }

    public function getSignUpSubmitButton() {
        return $this->find('//*[@class="button submit" and @type="submit"]');
    }

    public function getNewUserNameTitle(){
        return $this->find('//span[contains(text(), "Bonjour")]');
    }

    public function fillSignUpForm(){
        $this->getSignUpNameField()->value(SignUpData::generateNewName());
        $this->getSignUpLastNameField()->value(SignUpData::generateNewName());
        $this->getSignUpEmailField()->value(SignUpData::generateNewEmail());
        $this->getSignUpTermsCheckBox()->click();
        $this->getSignUpSubscribeCheckBox()->click();
        $this->getSignUpSubmitButton()->click();
        return new SignUpPage($this->driver);
    }

}