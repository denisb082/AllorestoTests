<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 13:19
 */

class HomePage extends BasePageMy {

    protected $searchField;
    protected $searchButton;
    protected $logInLink;
    protected $signUpLink;

    public function __construct(PHPUnit_Extensions_Selenium2TestCase $driver)
    {
        parent::__construct($driver);
    }

    public function getSearchField() {
        return $this->find('//*[@id="searchForm-input" and @name="searchText"]');
    }

    public function getSearchButton() {
        return $this->find('html//*[@class="button submit" and @type="submit"]');
    }

    public function getLogInLink() {
        return $this->find('//*[@href="https://www.alloresto.fr/connexion"]');
    }

    public function getSignUpLink() {
        return $this->find('//*[@href="https://www.alloresto.fr/inscription"]');
    }

    public function fillAndSearch(){
        $this->getSearchField()->value(HomePageData::$searchQuery);
        $this->getSearchButton()->click();
        return new SearchResultPage($this->driver);
    }
}
