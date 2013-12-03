<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Reference;



/**
*	2-letter code and corresponding country name that the system supports.
*/
class Country
{
	/**
	*2 letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $code;
	public function getCode() {
		return $this->code;
	}
	
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	*The name of the country.
	*/
	public $name;
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

}

?>
