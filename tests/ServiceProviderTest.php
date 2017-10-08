<?php

namespace Ridrog\SimpleAdmin\Test;

use Illuminate\Support\ServiceProvider;
use Ridrog\SimpleAdmin\SimpleAdminServiceProvider;
use Ridrog\SimpleAdmin\Test\TestCase as TestCase;

class ServiceProviderTest extends TestCase
{

    /**
     *
     * @var SimpleAdminServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(SimpleAdminServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
            \Illuminate\Support\ServiceProvider::class,
            SimpleAdminServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }

}