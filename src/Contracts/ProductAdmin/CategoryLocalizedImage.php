<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	The localized product category image in the language specified by the LocaleCode.
*/
class CategoryLocalizedImage
{
	/**
	*Descriptive text associated with the image or video that appears on the web storefront. This text displays on a hover-over in the browser, providing further information on the content displayed. The alternate text should be plain alphanumeric text without special characters or HTML coding.
	*/
	public $altText;

	/**
	*The identifier of the image in the  CMS. Supply a value for either the CMS ID or Image URL parameter.
	*/
	public $cmsId;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The localized title for an image that displays on the storefront. If localized, the displayed content is set per the locale code for the site.
	*/
	public $imageLabel;

	/**
	*The URL link for the image file associated with a product or category.
	*/
	public $imageUrl;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*Type of media specification required to successfully render the image, video, or other media content for products and categories.
	*/
	public $mediaType;

	/**
	*The numeric order of objects, used by a vocabulary value defined for an extensible attribute, images, and categories.
	*/
	public $sequence;

	/**
	*The URL of a video files for a product or category. The path name is set in the language specified by the LocaleCode.
	*/
	public $videoUrl;

}

?>
