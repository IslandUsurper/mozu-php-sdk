<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\ThirdParty;



class Capability
{
		public $CapabilityMode;
	public function getCapabilityMode() {
		return $this->CapabilityMode;
	}
	
	public function setCapabilityMode($capabilityMode) {
		$this->CapabilityMode = $capabilityMode;
		return $this;
	}

		public $CapabilityType;
	public function getCapabilityType() {
		return $this->CapabilityType;
	}
	
	public function setCapabilityType($capabilityType) {
		$this->CapabilityType = $capabilityType;
		return $this;
	}

		public $Enabled;
	public function getEnabled() {
		return $this->Enabled;
	}
	
	public function setEnabled($enabled) {
		$this->Enabled = $enabled;
		return $this;
	}

		public $Initialized;
	public function getInitialized() {
		return $this->Initialized;
	}
	
	public function setInitialized($initialized) {
		$this->Initialized = $initialized;
		return $this;
	}

		public $ScopeId;
	public function getScopeId() {
		return $this->ScopeId;
	}
	
	public function setScopeId($scopeId) {
		$this->ScopeId = $scopeId;
		return $this;
	}

		public $ScopeType;
	public function getScopeType() {
		return $this->ScopeType;
	}
	
	public function setScopeType($scopeType) {
		$this->ScopeType = $scopeType;
		return $this;
	}

		public $AuditInfo;
	public function getAuditInfo() {
		return $this->AuditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->AuditInfo = $auditInfo;
		return $this;
	}

		public $OperationUrls;
	public function getOperationUrls() {
		return $this->OperationUrls;
	}
	
	public function setOperationUrls($operationUrls) {
		$this->OperationUrls = $operationUrls;
		return $this;
	}

		public $Properties;
	public function getProperties() {
		return $this->Properties;
	}
	
	public function setProperties($properties) {
		$this->Properties = $properties;
		return $this;
	}

}

?>