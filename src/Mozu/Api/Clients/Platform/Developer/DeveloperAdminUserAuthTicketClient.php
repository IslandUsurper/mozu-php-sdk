<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Developer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Developer\DeveloperAdminUserAuthTicketUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this resource to manage authentication tickets for your developer account.
*/
class DeveloperAdminUserAuthTicketClient {

	/**
	* Generate an authentication ticket for a developer account.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param UserAuthInfo $userAuthInfo The user authentication information required to generate the developer account user authentication ticket, which consists of a user name and password.
	* @return MozuClient
	*/
	public static function createDeveloperUserAuthTicketClient($userAuthInfo, $developerAccountId =  null)
	{
		$url = DeveloperAdminUserAuthTicketUrl::createDeveloperUserAuthTicketUrl($developerAccountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($userAuthInfo);
		return $mozuClient;

	}
	
	/**
	* Generates a new developer account authentication ticket for the specified tenant by supplying the defined refresh token information.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param DeveloperAdminUserAuthTicket $existingAuthTicket Properties of the authentication ticket to refresh. The refresh token is required to complete this request.
	* @return MozuClient
	*/
	public static function refreshDeveloperAuthTicketClient($existingAuthTicket, $developerAccountId =  null)
	{
		$url = DeveloperAdminUserAuthTicketUrl::refreshDeveloperAuthTicketUrl($developerAccountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($existingAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the authentication ticket for the developer account by supplying the refresh token.
	*
	* @param string $refreshToken Refresh token string associated with the developer account authentication ticket.
	*/
	public static function deleteUserAuthTicketClient($refreshToken)
	{
		$url = DeveloperAdminUserAuthTicketUrl::deleteUserAuthTicketUrl($refreshToken);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
