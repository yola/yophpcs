<?php


class PrivatePropertiesUnderscoreSniffTest extends \Codeception\TestCase\Test
{
    use Codeception\Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $target = 'Yola/Properties/PrivatePropertiesUnderscore';

    protected $targetLoc;

    protected function _before()
    {
        $this->targetLoc = 'tests/unit/targets/' . $this->target . '.php.test';
    }

    protected function _after()
    {
    }

    public function testSniff()
    {
        $this->specify('underscore is required for private visibility', function() {
            $this->tester->runShellCommand("vendor/bin/phpcs $this->targetLoc --extensions=.php.test --standard=Yola/", false);
            verify($this->tester->seeInShellOutput('7 | ERROR | Private property name must be prefixed with underscore.'));
            verify($this->tester->dontSeeInShellOutput('8 | ERROR | Private property name must be prefixed with underscore.'));
        });
    }

}
