<?php

//require_once __DIR__ . '/../../../../../BaseTest.php';
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\ApiContext;
use Mozu\Tests\BaseTest;
use Mozu\Api\ApiException;
use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Resources\Platform\Developer\ApplicationVersionResource;
/**
 * Test class for TenantResource.
 * Generated by PHPUnit on 2013-09-25 at 14:05:39.
 */
class ApplicationVersionResourceTest extends BaseTest
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
		$apiContext = new ApiContext();
		
		$userAuthInfo = new UserAuthInfo();
		$userAuthInfo->emailAddress = $this->emailAddress;
		$userAuthInfo->password = $this->password;
		
		$authenticationProfile = UserAuthenticator::authenticate($userAuthInfo, AuthenticationScope::DEVELOEPR,1);

		$apiContext = $apiContext->setUserAuthTicket($authenticationProfile->authTicket);
		var_dump($apiContext);
		$this->object = new ApplicationVersionResource($apiContext);
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
	public function testGetApplications()
	{
		printf("Reading tenant...");
		try{
			$applications = $this->object->getAllApplications();

			//var_dump($applications);
		} catch(ApiException $apiException) {
			//var_dump($apiException);
		}
		 

	}
}

?>