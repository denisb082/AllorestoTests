<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 0:10
 */
class SearchingTest extends BaseTest {

    public function testPizzaPrestoSearch(){

        $assertion = new BaseTest($this->assert);
        $homePage = new HomePage($this->driver);
        $homePage->fillAndSearch();
        $searchPage = new SearchResultPage($this->driver);
        $assertion->assert->assertEquals("Expected res", $searchPage->getSearchResult() );

    }
}