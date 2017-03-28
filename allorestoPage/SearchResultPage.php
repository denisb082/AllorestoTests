<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 13:26
 */

class SearchResultPage extends BasePageMy {

    public function __construct(PHPUnit_Extensions_Selenium2TestCase $driver)
    {
        parent::__construct($driver);
    }


    public function getSearchResult(){
        return $this->find("//*[@class='name']/a[text()='Pizza Presto']");
    }

}