<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Entitylists;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ListViewUrl  {

	/**
		* Get Resource Url for GetViewEntity
		* @param string $entityId Unique identifier for an entity, which defines the schema, rules, and formats for JSON entities within the MZDB ( Mongo DB).
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function getViewEntityUrl($entityId, $entityListFullName, $responseFields, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}/entities/{entityId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityId", $entityId);
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetViewEntities
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function getViewEntitiesUrl($entityListFullName, $filter, $pageSize, $responseFields, $startIndex, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}/entities?pageSize={pageSize}&startIndex={startIndex}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetViewEntityContainer
		* @param string $entityId Unique identifier for an entity, which defines the schema, rules, and formats for JSON entities within the MZDB ( Mongo DB).
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function getViewEntityContainerUrl($entityId, $entityListFullName, $responseFields, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}/entityContainers/{entityId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityId", $entityId);
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetViewEntityContainers
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function getViewEntityContainersUrl($entityListFullName, $filter, $pageSize, $responseFields, $startIndex, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}/entityContainers?pageSize={pageSize}&startIndex={startIndex}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetEntityListView
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function getEntityListViewUrl($entityListFullName, $responseFields, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetEntityListViews
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getEntityListViewsUrl($entityListFullName, $responseFields)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateEntityListView
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createEntityListViewUrl($entityListFullName, $responseFields)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateEntityListView
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function updateEntityListViewUrl($entityListFullName, $responseFields, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteEntityListView
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $viewName The name for a view. Views are used to render data in , such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
		* @return string Resource Url
	*/
	public static function deleteEntityListViewUrl($entityListFullName, $viewName)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/views/{viewName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("viewName", $viewName);
		return $mozuUrl;
	}
	
}

?>

