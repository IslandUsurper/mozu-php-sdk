<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\DocumentDraftSummaryUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the document publishing subresource to manage and publish document drafts in the Content service.
*/
class DocumentDraftSummaryClient {

	/**
	* Retrieves a list of the documents currently in draft state, according to any defined filter and sort criteria.
	*
	* @param string $documentLists Lists that contain the document drafts.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function listDocumentDraftSummariesClient($dataViewMode, $documentLists =  null, $pageSize =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::listDocumentDraftSummariesUrl($documentLists, $pageSize, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Publish one or more document drafts to live content on the site.
	*
	* @param string $documentLists List of document lists that contain documents to publish.
	* @param array|string $documentIds List of unique identifiers of the document drafts to publish.
	*/
	public static function publishDocumentsClient($dataViewMode, $documentIds, $documentLists =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::publishDocumentsUrl($documentLists);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentIds)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the drafts of the specified documents. Published documents cannot be deleted.
	*
	* @param string $documentIds Unique identifiers of the documents to delete.
	* @param string $documentLists List of document lists that contain documents to delete.
	*/
	public static function deleteDocumentDraftsClient($dataViewMode,  $documentIds, $documentLists =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::deleteDocumentDraftsUrl($documentIds, $documentLists);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
