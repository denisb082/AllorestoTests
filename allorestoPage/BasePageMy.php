<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 11:46
 */

class BasePageMy
{
    /**
     * @var PHPUnit_Extensions_Selenium2TestCase
     */
    protected $driver;

    public function __construct(PHPUnit_Extensions_Selenium2TestCase $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param PHPUnit_Extensions_Selenium2TestCase_Element $elem
     * @return string
     */
    public function getText(PHPUnit_Extensions_Selenium2TestCase_Element $elem)
    {
        return $elem->text();
    }

    public function find($locator) {
        switch (true) {
            case isset($locator["xpath"]):
                return $this->driver->byXPath($locator["xpath"]);
                break;
            case isset($locator["css"]):
                return $this->driver->byCssSelector($locator["css"]);
                break;
        }
    }
}