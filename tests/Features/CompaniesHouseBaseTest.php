<?php

namespace GhazanfarMir\CompaniesHouse\Tests\Features;

use PHPUnit\Framework\TestCase;
use GhazanfarMir\CompaniesHouse\Http\Client;
use GhazanfarMir\CompaniesHouse\CompaniesHouse;

abstract class CompaniesHouseBaseTest extends TestCase
{
    /**
     * @var string
     */
    protected $api_key = null;

    /**
     * @var string
     */
    protected $base_uri = 'https://api.companieshouse.gov.uk/';

    /**
     * @var
     */
    protected $client;

    /**
     * @var
     */
    protected $api;

    /**
     * @var
     */
    protected $platform;

	/**
	 * CompaniesHouseBaseTest constructor.
	 */
    public function __construct ()
	{
		$this->api_key = env('COMPANIES_HOUSE_API_KEY');
		
		return parent::__construct();
	}

	/**
     * @test
     */
    public function setUp()
    {
        parent::setUp();

        $this->client = new Client($this->base_uri, $this->api_key);

        $this->api = new CompaniesHouse($this->client);

        $this->platform = getenv('PLATFORM');

        $this->assertTrue(true);
    }
}
