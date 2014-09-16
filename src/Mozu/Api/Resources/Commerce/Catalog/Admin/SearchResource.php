<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\SearchClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\SearchSettings;

/**
* 
*/
class SearchResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* 
	*
	* @param string $responseFields 
	* @return SearchSettings 
	*/
	public function getSettings($responseFields =  null)
	{
		$mozuClient = SearchClient::getSettingsClient($responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SearchSettings $settings 
	* @return SearchSettings 
	*/
	public function updateSettings($settings, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSettingsClient($settings, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>
