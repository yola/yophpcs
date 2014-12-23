<?php

namespace tests\unit;

/**
 * Class for Sniff Tests to inherit from
 */
class SniffTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected static $tester;

    /*
     * @var string
     */
    protected $targetLoc;

    /**
     * If overriding this function, be sure to call parent in the function
     * parent::_before();
     * @method _before
     */
    protected function _before()
    {
        $this->targetLoc = 'tests/unit/targets/' . $this->_target();
    }

    /**
     * [_after description]
     * @method  _after
     */
    protected function _after()
    {
    }

    /**
     * Returns the target file to sniff relative to the targets directory
     * @method  _target
     * @example Write   an            example
     * @return  [type]  [description]
     */
    private function _target() {
        return $this->standard . '/' . $this->section . '/' . $this->sniff . '.php.test';
    }
}
