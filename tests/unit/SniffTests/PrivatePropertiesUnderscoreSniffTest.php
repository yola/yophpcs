<?php

namespace tests\unit\SniffTests;

use tests\unit\SniffTest;

/**
 * Test Class to test the PrivatePropertiesUnderscore Sniff
 */
class PrivatePropertiesUnderscoreSniffTest extends SniffTest
{
    use \Codeception\Specify;

    /*
     * @var string
     */
    protected $standard = 'Yola';

    /*
     * @var string
     */
    protected $section = 'Properties';

    /*
     * @var string
     */
    protected $sniff = 'PrivatePropertiesUnderscore';

    /**
     * Tests the Sniff
     * @method  testSniff
     */
    public function testSniff()
    {
        $this->specify('underscore is required for private visibility', function() {
            $this->tester->runShellCommand("vendor/bin/phpcs $this->targetLoc --extensions=.php.test --standard=Yola/", false);
            $this->tester->seeInShellOutput('7 | ERROR | Private property name must be prefixed with underscore.');
            $this->tester->dontSeeInShellOutput('8 | ERROR | Private property name must be prefixed with underscore.');
        });
    }

}
