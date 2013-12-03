<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core;



/**
*	Address information to supply for a contact.
*/
class Address
{
	/**
	*Physical or mailing address line one. Usually includes the street number and street name or it could be a P.O. Box. Max length: 200.
	*/
	public $address1;
	public function getAddress1() {
		return $this->address1;
	}
	
	public function setAddress1($address1) {
		$this->address1 = $address1;
		return $this;
	}

	/**
	*Physical or mailing address line two. Usually supplements the main street address with apartment, floor, suite, building, or unit information. Max length: 200.
	*/
	public $address2;
	public function getAddress2() {
		return $this->address2;
	}
	
	public function setAddress2($address2) {
		$this->address2 = $address2;
		return $this;
	}

	/**
	*Physical or mailing address line three. Max length: 200.
	*/
	public $address3;
	public function getAddress3() {
		return $this->address3;
	}
	
	public function setAddress3($address3) {
		$this->address3 = $address3;
		return $this;
	}

	/**
	*Physical or mailing address line four. Max length: 200.
	*/
	public $address4;
	public function getAddress4() {
		return $this->address4;
	}
	
	public function setAddress4($address4) {
		$this->address4 = $address4;
		return $this;
	}

	/**
	*The type of address, which is commercial or residential.
	*/
	public $addressType;
	public function getAddressType() {
		return $this->addressType;
	}
	
	public function setAddressType($addressType) {
		$this->addressType = $addressType;
		return $this;
	}

	/**
	*City or town for the physical or mailing address. Max length: 100.
	*/
	public $cityOrTown;
	public function getCityOrTown() {
		return $this->cityOrTown;
	}
	
	public function setCityOrTown($cityOrTown) {
		$this->cityOrTown = $cityOrTown;
		return $this;
	}

	/**
	*2 letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $countryCode;
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	public function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	*If true, the address has been verified by an address validation service.
	*/
	public $isValidated;
	public function getIsValidated() {
		return $this->isValidated;
	}
	
	public function setIsValidated($isValidated) {
		$this->isValidated = $isValidated;
		return $this;
	}

	/**
	*"For example, a USPS-approved ZIP code standard is ZIP+4: 12345-6789. Max length: 100."
	*/
	public $postalOrZipCode;
	public function getPostalOrZipCode() {
		return $this->postalOrZipCode;
	}
	
	public function setPostalOrZipCode($postalOrZipCode) {
		$this->postalOrZipCode = $postalOrZipCode;
		return $this;
	}

	/**
	*2 letter geographic code representing the state for the physical or mailing address. Currently limited to the US.
	*/
	public $stateOrProvince;
	public function getStateOrProvince() {
		return $this->stateOrProvince;
	}
	
	public function setStateOrProvince($stateOrProvince) {
		$this->stateOrProvince = $stateOrProvince;
		return $this;
	}

}

?>
