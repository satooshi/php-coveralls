<?php
namespace Contrib\Component\Service\Coveralls\V1\Config;

/**
 * @covers Contrib\Component\Service\Coveralls\V1\Config\Configuration
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->object = new Configuration();
    }

    // hasRepoToken()
    // getRepoToken()

    /**
     * @test
     */
    public function shouldNotHaveRepoTokenOnConstruction()
    {
        $this->assertFalse($this->object->hasRepoToken());
        $this->assertNull($this->object->getRepoToken());
    }

    // hasServiceName()
    // getServiceName()

    /**
     * @test
     */
    public function shouldNotHaveServiceNameOnConstruction()
    {
        $this->assertFalse($this->object->hasServiceName());
        $this->assertNull($this->object->getServiceName());
    }

    // getSrcDir()

    /**
     * @test
     */
    public function shouldNotHaveSrcDirOnConstruction()
    {
        $this->assertNull($this->object->getSrcDir());
    }

    // getCloverXmlPath()

    /**
     * @test
     */
    public function shouldNotHaveCloverXmlPathOnConstruction()
    {
        $this->assertNull($this->object->getCloverXmlPath());
    }

    // getJsonPath()

    /**
     * @test
     */
    public function shouldNotHaveJsonPathOnConstruction()
    {
        $this->assertNull($this->object->getJsonPath());
    }

    // isDryRun()

    /**
     * @test
     */
    public function shouldBeDryRunOnConstruction()
    {
        $this->assertTrue($this->object->isDryRun());
    }

    // isVerbose

    /**
     * @test
     */
    public function shouldNotBeVerboseOnConstruction()
    {
        $this->assertFalse($this->object->isVerbose());
    }

    // getEnv()

    /**
     * @test
     */
    public function shouldBeProdEnvOnConstruction()
    {
        $this->assertEquals('prod', $this->object->getEnv());
    }

    // isTestEnv()

    /**
     * @test
     */
    public function shouldBeTestEnv()
    {
        $expected = 'test';

        $this->object->setEnv($expected);

        $this->assertEquals($expected, $this->object->getEnv());
        $this->assertTrue($this->object->isTestEnv());
        $this->assertFalse($this->object->isDevEnv());
        $this->assertFalse($this->object->isProdEnv());
    }

    // isDevEnv()

    /**
     * @test
     */
    public function shouldBeDevEnv()
    {
        $expected = 'dev';

        $this->object->setEnv($expected);

        $this->assertEquals($expected, $this->object->getEnv());
        $this->assertFalse($this->object->isTestEnv());
        $this->assertTrue($this->object->isDevEnv());
        $this->assertFalse($this->object->isProdEnv());
    }

    // isProdEnv()

    /**
     * @test
     */
    public function shouldBeProdEnv()
    {
        $expected = 'prod';

        $this->object->setEnv($expected);

        $this->assertEquals($expected, $this->object->getEnv());
        $this->assertFalse($this->object->isTestEnv());
        $this->assertFalse($this->object->isDevEnv());
        $this->assertTrue($this->object->isProdEnv());
    }



    // setRepoToken()

    /**
     * @test
     */
    public function setRepoToken()
    {
        $expected = 'token';

        $same = $this->object->setRepoToken($expected);

        $this->assertSame($same, $this->object);
        $this->assertSame($expected, $this->object->getRepoToken());
    }

    // setServiceName()

    /**
     * @test
     */
    public function setServiceName()
    {
        $expected = 'travis-ci';

        $same = $this->object->setServiceName($expected);

        $this->assertSame($same, $this->object);
        $this->assertSame($expected, $this->object->getServiceName());
    }

    // setSrcDir()

    /**
     * @test
     */
    public function setSrcDir()
    {
        $expected = '/path/to/src';

        $same = $this->object->setSrcDir($expected);

        $this->assertSame($same, $this->object);
        $this->assertSame($expected, $this->object->getSrcDir());
    }

    // setCloverXmlPath()

    /**
     * @test
     */
    public function setCloverXmlPath()
    {
        $expected = '/path/to/clover.xml';

        $same = $this->object->setCloverXmlPath($expected);

        $this->assertSame($same, $this->object);
        $this->assertSame($expected, $this->object->getCloverXmlPath());
    }

    // setJsonPath()

    /**
     * @test
     */
    public function setJsonPath()
    {
        $expected = '/path/to/coveralls-upload.json';

        $same = $this->object->setJsonPath($expected);

        $this->assertSame($same, $this->object);
        $this->assertSame($expected, $this->object->getJsonPath());
    }

    // setDryRun()

    /**
     * @test
     */
    public function setDryRunFalse()
    {
        $expected = false;

        $same = $this->object->setDryRun($expected);

        $this->assertSame($same, $this->object);
        $this->assertFalse($this->object->isDryRun());
    }

    /**
     * @test
     */
    public function setDryRunTrue()
    {
        $expected = true;

        $same = $this->object->setDryRun($expected);

        $this->assertSame($same, $this->object);
        $this->assertTrue($this->object->isDryRun());
    }

    // setVerbose()

    /**
     * @test
     */
    public function setVerboseFalse()
    {
        $expected = false;

        $same = $this->object->setVerbose($expected);

        $this->assertSame($same, $this->object);
        $this->assertFalse($this->object->isVerbose());
    }

    /**
     * @test
     */
    public function setVerboseTrue()
    {
        $expected = true;

        $same = $this->object->setVerbose($expected);

        $this->assertSame($same, $this->object);
        $this->assertTrue($this->object->isVerbose());
    }

    // setEnv()

    /**
     * @test
     */
    public function setEnv()
    {
        $expected = 'myenv';

        $same = $this->object->setEnv($expected);

        $this->assertSame($same, $this->object);
        $this->assertEquals($expected, $this->object->getEnv());
    }
}
