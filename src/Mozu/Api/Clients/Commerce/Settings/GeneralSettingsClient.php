<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\GeneralSettingsUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\SiteSettings\General\GeneralSettings;

/**
* Define global site settings such as the site name, shipping and email addresses, and logo images. Block undesirable IP addresses using this resource.
*/
class GeneralSettingsClient {

	/**
	* Retrieve a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getGeneralSettingsClient($responseFields =  null)
	{
		$url = GeneralSettingsUrl::getGeneralSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Updates a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param GeneralSettings $generalSettings The properties of the site's general settings to update.
	* @return MozuClient
	*/
	public static function updateGeneralSettingsClient($generalSettings, $responseFields =  null)
	{
		$url = GeneralSettingsUrl::updateGeneralSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($generalSettings);

	}
	
	
}

?>

