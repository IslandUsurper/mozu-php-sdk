<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingAdmin;



/**
*	Properties of a localized string value used in the shipping admin.
*/
class LocalizableString
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $LocaleCode;
	public function getLocaleCode() {
		return $this->LocaleCode;
	}
	
	public function setLocaleCode($localeCode) {
		$this->LocaleCode = $localeCode;
		return $this;
	}

	/**
	*Value of the localizable string in the language specified by the locale code.
	*/
	public $Value;
	public function getValue() {
		return $this->Value;
	}
	
	public function setValue($value) {
		$this->Value = $value;
		return $this;
	}

}

?>