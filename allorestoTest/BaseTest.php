<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 11:49
 */

class BaseTest {

    /**
     * @var PHPUnit_Extensions_Selenium2TestCase driver
     */
    protected $driver;

    /**
     * @var PHPUnit_Framework_Assert
     */
    protected $assert;

    public function __construct(PHPUnit_Framework_Assert $assert)
    {
        $this->assert = $assert;
    }

    public $browser_config = null;

    public static $browsers_config = array(
        'chrome' => array(
            'name'    => 'Google chrome',
            'browserName' => 'chrome',
            'port'    => 4444,
            'timeout' => 30000,
        )
    );

    public function getUiTestHost(){

        return getenv('UI_TEST_HOST');
    }

    public function getTestUrl()
    {
        return $this->driver->url("https://www.alloresto.fr");
    }

    public function getBrowserTestConfig()
    {
        return getenv('BROWSER');
    }

    /**
     * @before
     */
    public function setUp() {
        $this->driver->setHost($this->getUiTestHost());
        $this->browser_config = self::$browsers_config[getenv('BROWSER')];
        $this->driver->setBrowser($this->browser_config['browserName']);
        $this->driver->setBrowserUrl($this->getTestUrl());
    }

    public function getDriver(PHPUnit_Extensions_Selenium2TestCase $driver) {
        return $this->driver = $driver;
    }

    /**
     * @after
     */
    public function tearDown()
    {
        if ($this->driver == null) {
            unset($this->driver);
        }
    }
}