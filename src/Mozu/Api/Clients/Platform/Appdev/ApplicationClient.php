<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Appdev;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Appdev\ApplicationUrl;

/**
* Use the apps resource to register namespaces for third party applications.
*/
class ApplicationClient {

	/**
	* Register the namespace that will prepend all application attributes.
	*
	* @param NamespaceRegistry $namespaceRegistry Properties of the namespace registry to perform.
	* @return MozuClient
	*/
	public static function registerNamespaceClient($namespaceRegistry)
	{
		$url = ApplicationUrl::registerNamespaceUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($namespaceRegistry);
		return $mozuClient;

	}
	
	/**
	* Re-register the namespace that will prepend all application attributes.
	*
	* @param NamespaceRegistry $namespaceRegistry Properties of the namespace registry to perform.
	* @return MozuClient
	*/
	public static function reRegisterNamespaceClient($namespaceRegistry)
	{
		$url = ApplicationUrl::reRegisterNamespaceUrl();
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($namespaceRegistry);
		return $mozuClient;

	}
	
	
}

?>
