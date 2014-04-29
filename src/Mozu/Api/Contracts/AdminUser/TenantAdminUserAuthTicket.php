<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\AdminUser;



/**
*	Properties of the authentication ticket to be used in user claims with the Mozu API.
*/
class TenantAdminUserAuthTicket
{
	/**
	*Alphanumeric string used to authenticate the user in API request headers.
	*/
	public $accessToken;

	/**
	*The date and time the user access token expires.
	*/
	public $accessTokenExpiration;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createdOn;

	/**
	*Collection of behaviors encrypted in the user authentication ticket. Behaviors are granted to users as part of the role assigned for the given tenant or developer account.
	*/
	public $grantedBehaviors;

	/**
	*Alphanumeric string used to generate a new user authentication ticket after the access token expires.
	*/
	public $refreshToken;

	/**
	*The date and time the user refresh token expires.
	*/
	public $refreshTokenExpiration;

	/**
	*Collection of tenants for which the user authentication ticket grants access.
	*/
	public $availableTenants;

	/**
	*Tenant information associated with the user authentication ticket.
	*/
	public $tenant;

	/**
	*User information associated with the authentication ticket.
	*/
	public $user;

}

?>