<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class UserDataUrl  {

	/**
		* Get Resource Url for GetDBValue
		* @param string $dbEntryQuery The database entry query string used to retrieve the record information.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getDBValueUrl($dbEntryQuery, $responseFields)
	{
		$url = "/api/platform/userdata/{*dbEntryQuery}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @return string Resource Url
	*/
	public static function createDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDBValue
		* @param string $dbEntryQuery The database entry query string used to update the record information.
		* @return string Resource Url
	*/
	public static function updateDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDBValue
		* @param string $dbEntryQuery The database entry string to delete.
		* @return string Resource Url
	*/
	public static function deleteDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);

		return $mozuUrl;
	}
	
}

?>

