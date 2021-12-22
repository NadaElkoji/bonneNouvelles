<?php


use PHPUnit\Framework\TestCase;
require "vendor/autoload.php";
require "controllers/PositivityController.php";

class PositivityControllerTest extends TestCase{
    private $positivityController;
    protected function setUp():void
    {
        parent::setUp();
        $this->positivityController = new PositivityController();
    }
    public function test()
    {
        $this->assertEquals("test", "test");
    }
}