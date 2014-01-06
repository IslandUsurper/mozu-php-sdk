<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content\Documentlists;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DocumentTreeUrl  {

	/**
		* Get Resource Url for GetTreeDocument
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function getTreeDocumentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function getTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function updateTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content?folderPath={folderPath}&folderId={folderId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function deleteTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content?folderPath={folderPath}&folderId={folderId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
}

?>

