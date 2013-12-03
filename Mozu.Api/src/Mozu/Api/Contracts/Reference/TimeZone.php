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
*	A world date and time standard such as "Dateline Standard Time" or "UTC-12".
*/
class TimeZone
{
	/**
	*Identifier of the time zone.
	*/
	public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	*If true, the time zone standard observes daylight savings time advancements, for example, twice a year so that evenings have more daylight and mornings have less. If false, the time zone standard does not adhere to daylight savings changes.
	*/
	public $isDaylightSavingsTime;
	public function getIsDaylightSavingsTime() {
		return $this->isDaylightSavingsTime;
	}
	
	public function setIsDaylightSavingsTime($isDaylightSavingsTime) {
		$this->isDaylightSavingsTime = $isDaylightSavingsTime;
		return $this;
	}

	/**
	*The offset associated with the time zone, such as "-12".
	*/
	public $offset;
	public function getOffset() {
		return $this->offset;
	}
	
	public function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

}

?>
