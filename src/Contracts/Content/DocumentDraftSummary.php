<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Summary properties of an unpublished document draft.
*/
class DocumentDraftSummary
{
	/**
	*Detailed information of the date and time for the active update date for the document draft summary. This data is associated to document and content data.
	*/
	public $activeUpdateDate;

	/**
	*Fully qualified name of the document type. 
	*/
	public $documentTypeFQN;

	/**
	*Detailed information of the date and time for the draft update date for the document draft summary. This data is associated to document and content data.
	*/
	public $draftUpdateDate;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The fully qualified name of the document list.
	*/
	public $listFQN;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Whether the draft has been published.
	*/
	public $publishType;

	/**
	*Unique identifier of the user who last modified the item. This value is system-supplied and read-only.
	*/
	public $updatedBy;

}

?>