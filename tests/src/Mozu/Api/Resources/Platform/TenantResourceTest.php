<?php

require_once __DIR__ . '/../../../../BaseTest.php';
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\ApiContext;
use Mozu\Tests\BaseTest;
use Mozu\Api\ApiException;

/**
 * Test class for TenantResource.
 * Generated by PHPUnit on 2013-09-25 at 14:05:39.
 */
class TenantResourceTest extends BaseTest
{
    /**
     * @var TenantResource
     */
    protected $object;
	protected $apiContext;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TenantResource(new ApiContext());
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Platform\TenantResource::getTenant
     * @todo Implement testGetTenant().
     */
    public function testGetTenant()
    {
    	printf("Reading tenant...");
    	try{
	      	$tenant = $this->object->getTenant($this->tenantId);

	      	$this->assertSame($tenant->id, $this->tenantId);
    	} catch(ApiException $apiException) {
    		var_dump($apiException);
    	}
    	
    	 
    }
}
?>
