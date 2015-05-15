<?php

namespace tests\unit\SniffTests;

use tests\unit\SniffTest;

/**
 * Test Class to test the PrivatePropertiesUnderscore Sniff
 */
class SideEffectsSniffTest extends SniffTest
{
    use \Codeception\Specify;

    /*
     * @var string
     */
    protected $standard = 'Yola52';

    /*
     * @var string
     */
    protected $section = 'Files';

    /*
     * @var string
     */
    protected $sniff = 'SideEffects';

    /**
     * Tests the Sniff
     * @method  testSniff
     */
    public function testSniff()
    {
        $this->specify('require* should not give warnings', function() {
            $this->tester->runShellCommand("vendor/bin/phpcs $this->targetLoc --extensions=.php.test --standard=Yola", false);
            $this->tester->dontSeeInShellOutput('1 | WARNING | A file should declare new symbols (classes, functions,');
        });
    }

}
