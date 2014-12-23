<?php

namespace tests\unit;

abstract class SniffTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected static $tester;

    /*
     * @var string
     */
    protected $targetLoc;

    protected function _before()
    {
        $this->targetLoc = 'tests/unit/targets/' . $this->_target();
    }

    protected function _after()
    {
    }

    private function _target() {
        return $this->standard . '/' . $this->section . '/' . $this->sniff . '.php.test';
    }

    abstract public function testSniff();

}
