<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\General;



/**
*	General settings used on the storefront site.
*/
class GeneralSettings
{
	/**
	*If true, the site allows entry of addresses not verified by an address validation service.
	*/
	public $allowInvalidAddresses;

	/**
	*An email address to blind carbon copy anytime an automatic email is sent from  to a shopper.
	*/
	public $bccEmailAddress;

	/**
	*Custom override of the default subdomain for CDN-hosted content. For example, for SEO reasons you may prefer that the subdomain for your CDN content be  instead of the default subdomain, which might be something like .
	*/
	public $customCdnHostName;

	/**
	*The physical directory path or URL where the mobile favicon image file is stored. The favicon icon is generally 57x57 pixels. The icon appears on a mobile website or on the mobile device's OS Home.
	*/
	public $favIconMobilePath;

	/**
	*The physical directory path or URL where the mobile favicon image file is stored. The favicon icon is generally 16x16 pixels. The icon appears on a a browser tab as the website's mini logo or on a browser address bar, or next to the page name in a list of bookmarks.
	*/
	public $favIconPath;

	/**
	*The Google Analytics code associated with a particular store. This could be the web tracking code.
	*/
	public $googleAnalyticsCode;

	/**
	*If true, a service to verify addresses as valid is enabled for the site.
	*/
	public $isAddressValidationEnabled;

	/**
	*If true, the Google analytics for eCommerce is enabled for this site. If false, the analytics are not enabled.
	*/
	public $isGoogleAnalyticsEcommerceEnabled;

	/**
	*If true, enable Google analytics for this site. If false, analytics are not enabled.
	*/
	public $isGoogleAnalyticsEnabled;

	/**
	*If true, this site represents a -hosted web storefront.
	*/
	public $isMozuWebSite;

	/**
	*If true, shoppers on this site can create customer wish lists.
	*/
	public $isWishlistCreationEnabled;

	/**
	*The physical directory path or URL where the website logo is stored.
	*/
	public $logoPath;

	/**
	*The tagline or text that appears when hovering over the site logo.
	*/
	public $logoText;

	/**
	*Assigns an image to render in place of broken images and unspecified product images (and unspecified category images, if your theme developer has enabled category images). Specified by the name or ID of the CMS image within .
	*/
	public $missingImageSubstitute;

	/**
	*The name of the theme to use when viewing this website on a mobile device.
	*/
	public $mobileTheme;

	/**
	*The email shoppers should use to reply to an automatically-generated email.
	*/
	public $replyToEmailAddress;

	/**
	*Email address to set up so that shoppers and users browsing the site can use to contact the merchant.
	*/
	public $senderEmailAddress;

	/**
	*An alternate name for the sender email. For example, if your sender email is , you might want to use an alias of .
	*/
	public $senderEmailAlias;

	/**
	*Choose a format to use on the site: 12-hour (hh:mm:ss tt) or 24-hour format (HH:mm:ss).
	*/
	public $siteTimeFormat;

	/**
	*Choose the time zone to use for the site.
	*/
	public $siteTimeZone;

	/**
	*The name of the theme to use when viewing the website on a mobile device.
	*/
	public $tabletTheme;

	/**
	*Unique identifier of the tenant site that site uses to render content for the shopper. For example, if this site represents a third-party sales channel such as Amazon but the company wants to send shopper emails, this value represents the -hosted web storefront site that maintains this content.
	*/
	public $templateSiteId;

	/**
	*The name of the theme used on the storefront.
	*/
	public $theme;

	/**
	*The name of the website to display on the storefront with no spaces.
	*/
	public $websiteName;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Set of settings to deal with site caching.
	*/
	public $cacheSettings;

	/**
	*Site-level settings for custom routing, which allows you to use your own custom URL patterns for common  pages.
	*/
	public $customRoutes;

	/**
	*Set this property to  to disable automatically sending order confirmation emails after an order is submitted. If you enable this property, order confirmation emails are triggered only by the  API operation or a Resend Order Confirmation Email event (which can be triggered by an  user).
	*/
	public $emailTransactionsOnlyOnRequest;

	/**
	*A collection of overrides that allow you to apply unique email settings to the email template(s) of your choice.
	*/
	public $emailTypes;

	/**
	*Supressed emails. Setting any of these to 'true' will block  from sending that email and an event will be published instead.
	*/
	public $supressedEmailTransactions;

	/**
	*The territories configured for the site that are subject to sales tax.
	*/
	public $taxableTerritories;

	/**
	*A collection of authorizations that control access to viewing the pending and live sites.
	*/
	public $viewAuthorizations;

}

?>
