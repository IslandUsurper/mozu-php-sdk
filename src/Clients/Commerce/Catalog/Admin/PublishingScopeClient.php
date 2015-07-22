<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\Headers;
use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\PublishingScopeUrl;

/**
* Use the Product Publishing resource to publish or discard pending changes to product definitions in the master catalog.
*/
class PublishingScopeClient {

	/**
	* Deletes the draft version of product changes for each product code specified in the request.
	*
	* @param PublishingScope $publishScope Describes the scope of the product publishing update, which can include individual product codes or all pending changes.
	*/
	public static function discardDraftsClient($dataViewMode, $publishScope)
	{
		$url = PublishingScopeUrl::discardDraftsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($publishScope)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Publishes the draft version of product changes for each product code specified in the request, and changes the product publish state to "live".
	*
	* @param PublishingScope $publishScope Describes the scope of the product publishing update, which can include individual product codes or all pending changes.
	*/
	public static function publishDraftsClient($dataViewMode, $publishScope)
	{
		$url = PublishingScopeUrl::publishDraftsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($publishScope)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>
