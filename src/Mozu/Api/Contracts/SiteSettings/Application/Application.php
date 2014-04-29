<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Application;



/**
*	Properties of an application installed in a tenant.
*/
class Application
{
	/**
	*The unique identifier of the application in Mozu Dev Center.
	*/
	public $appId;

	/**
	*If true, the application is enabled for the tenant. System-supplied and read-only.
	*/
	public $enabled;

	/**
	*If true, the third party application settings have been configured and the application is initialized.
	*/
	public $initialized;

		public $isExtension;

	/**
	*URL of the application's setting configuration user interface, supplied by the capability developer in Dev Center.
	*/
	public $uiConfigurationUrl;

	/**
	*List of capabilities installed in a tenant.
	*/
	public $capabilities;

}

?>