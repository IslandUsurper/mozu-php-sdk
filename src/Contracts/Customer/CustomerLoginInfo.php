<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	The login information for a customer account.
*/
class CustomerLoginInfo
{
	/**
	*The email address for the customer account and contact. This email may be used for login to the storefront and for subscription mailing lists.
	*/
	public $emailAddress;

	/**
	*Mozu.Customer.Contracts.CustomerLoginInfo externalPassword ApiTypeMember DOCUMENT_HERE 
	*/
	public $externalPassword;

	/**
	*Indicates if this object/data was imported from an outside source such as a data import or synchronization via an app or service. If true, this data was originally imported into Mozu and accessible through your store database. Examples of imported objects/data include orders and customer accounts.
	*/
	public $isImport;

	/**
	*The saved password for the customer account. 
	*/
	public $password;

	/**
	*The user name associated with the user profile. The customer uses the user name to access the account.
	*/
	public $username;

}

?>