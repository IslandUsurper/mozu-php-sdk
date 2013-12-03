<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	All of the properties of the specified order.
*/
class Order
{
		public $acceptedDate;
	public function getAcceptedDate() {
		return $this->acceptedDate;
	}
	
	public function setAcceptedDate($acceptedDate) {
		$this->acceptedDate = $acceptedDate;
		return $this;
	}

	/**
	*The available order, payment, and shipment actions a user can perform for the order.
	*/
	public $availableActions;
	public function getAvailableActions() {
		return $this->availableActions;
	}
	
	public function setAvailableActions($availableActions) {
		$this->availableActions = $availableActions;
		return $this;
	}

	/**
	*Date when the order was cancelled. System-supplied and read-only.
	*/
	public $cancelledDate;
	public function getCancelledDate() {
		return $this->cancelledDate;
	}
	
	public function setCancelledDate($cancelledDate) {
		$this->cancelledDate = $cancelledDate;
		return $this;
	}

		public $channelCode;
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		return $this;
	}

	/**
	*Date when the order was closed. Closed order is an order that has been processed and the items shipped. System-supplied and read-only.
	*/
	public $closedDate;
	public function getClosedDate() {
		return $this->closedDate;
	}
	
	public function setClosedDate($closedDate) {
		$this->closedDate = $closedDate;
		return $this;
	}

		public $couponCodes;
	public function getCouponCodes() {
		return $this->couponCodes;
	}
	
	public function setCouponCodes($couponCodes) {
		$this->couponCodes = $couponCodes;
		return $this;
	}

		public $currencyCode;
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	*Numeric identifer of the customer account.
	*/
	public $customerAccountId;
	public function getCustomerAccountId() {
		return $this->customerAccountId;
	}
	
	public function setCustomerAccountId($customerAccountId) {
		$this->customerAccountId = $customerAccountId;
		return $this;
	}

		public $customerInteractionType;
	public function getCustomerInteractionType() {
		return $this->customerInteractionType;
	}
	
	public function setCustomerInteractionType($customerInteractionType) {
		$this->customerInteractionType = $customerInteractionType;
		return $this;
	}

		public $customerTaxId;
	public function getCustomerTaxId() {
		return $this->customerTaxId;
	}
	
	public function setCustomerTaxId($customerTaxId) {
		$this->customerTaxId = $customerTaxId;
		return $this;
	}

		public $discountedSubtotal;
	public function getDiscountedSubtotal() {
		return $this->discountedSubtotal;
	}
	
	public function setDiscountedSubtotal($discountedSubtotal) {
		$this->discountedSubtotal = $discountedSubtotal;
		return $this;
	}

	/**
	*The total amount of the order after all applicable discounts have been applied.
	*/
	public $discountedTotal;
	public function getDiscountedTotal() {
		return $this->discountedTotal;
	}
	
	public function setDiscountedTotal($discountedTotal) {
		$this->discountedTotal = $discountedTotal;
		return $this;
	}

	/**
	*Amount of discounts applied to all items in an order. Usually a negative dollar amount or number. System-supplied and read-only.
	*/
	public $discountTotal;
	public function getDiscountTotal() {
		return $this->discountTotal;
	}
	
	public function setDiscountTotal($discountTotal) {
		$this->discountTotal = $discountTotal;
		return $this;
	}

	/**
	*The email address of the specified user.
	*/
	public $email;
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	/**
	*The date when the order will no longer be active or considered abandoned. For example, if a guest or anonymous shoppper has 14 days of inactivity, the order is considered abandoned after that period of inactivity. An order never expires for shoppers who are logged into their account. Date in UTC Date/Time. System-supplied and read-only.
	*/
	public $expirationDate;
	public function getExpirationDate() {
		return $this->expirationDate;
	}
	
	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $expirationDate;
		return $this;
	}

		public $externalId;
	public function getExternalId() {
		return $this->externalId;
	}
	
	public function setExternalId($externalId) {
		$this->externalId = $externalId;
		return $this;
	}

	/**
	*The monetary sum of all fees incurred in the order.
	*/
	public $feeTotal;
	public function getFeeTotal() {
		return $this->feeTotal;
	}
	
	public function setFeeTotal($feeTotal) {
		$this->feeTotal = $feeTotal;
		return $this;
	}

		public $fulfillmentStatus;
	public function getFulfillmentStatus() {
		return $this->fulfillmentStatus;
	}
	
	public function setFulfillmentStatus($fulfillmentStatus) {
		$this->fulfillmentStatus = $fulfillmentStatus;
		return $this;
	}

	/**
	*The combined price for all items in the order, including all selected options but excluding any discounts.
	*/
	public $handlingAmount;
	public function getHandlingAmount() {
		return $this->handlingAmount;
	}
	
	public function setHandlingAmount($handlingAmount) {
		$this->handlingAmount = $handlingAmount;
		return $this;
	}

	/**
	*If the handling fee for the order is subject to sales tax, the total tax amount.
	*/
	public $handlingTaxTotal;
	public function getHandlingTaxTotal() {
		return $this->handlingTaxTotal;
	}
	
	public function setHandlingTaxTotal($handlingTaxTotal) {
		$this->handlingTaxTotal = $handlingTaxTotal;
		return $this;
	}

	/**
	*If true, the order has a draft that may include one or more uncommitted changes to the order or its components.
	*/
	public $hasDraft;
	public function getHasDraft() {
		return $this->hasDraft;
	}
	
	public function setHasDraft($hasDraft) {
		$this->hasDraft = $hasDraft;
		return $this;
	}

	/**
	*Identifier of the order.
	*/
	public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

		public $importDate;
	public function getImportDate() {
		return $this->importDate;
	}
	
	public function setImportDate($importDate) {
		$this->importDate = $importDate;
		return $this;
	}

	/**
	*The IP address from which the order originated.
	*/
	public $ipAddress;
	public function getIpAddress() {
		return $this->ipAddress;
	}
	
	public function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
		return $this;
	}

	/**
	*If true, this version of the order is a draft that might contain uncommitted changes.
	*/
	public $isDraft;
	public function getIsDraft() {
		return $this->isDraft;
	}
	
	public function setIsDraft($isDraft) {
		$this->isDraft = $isDraft;
		return $this;
	}

		public $isImport;
	public function getIsImport() {
		return $this->isImport;
	}
	
	public function setIsImport($isImport) {
		$this->isImport = $isImport;
		return $this;
	}

	/**
	*If true, the order is exempt from applied sales tax.
	*/
	public $isTaxExempt;
	public function getIsTaxExempt() {
		return $this->isTaxExempt;
	}
	
	public function setIsTaxExempt($isTaxExempt) {
		$this->isTaxExempt = $isTaxExempt;
		return $this;
	}

	/**
	*The total amount of tax applied to items in the order.
	*/
	public $itemTaxTotal;
	public function getItemTaxTotal() {
		return $this->itemTaxTotal;
	}
	
	public function setItemTaxTotal($itemTaxTotal) {
		$this->itemTaxTotal = $itemTaxTotal;
		return $this;
	}

	/**
	*The date when the order was last validated against the product catalog. Date in UTC Date/Time. System-supplied and read-only.
	*/
	public $lastValidationDate;
	public function getLastValidationDate() {
		return $this->lastValidationDate;
	}
	
	public function setLastValidationDate($lastValidationDate) {
		$this->lastValidationDate = $lastValidationDate;
		return $this;
	}

		public $locationCode;
	public function getLocationCode() {
		return $this->locationCode;
	}
	
	public function setLocationCode($locationCode) {
		$this->locationCode = $locationCode;
		return $this;
	}

	/**
	*The order number that displays on the storefront which differs from the order ID.
	*/
	public $orderNumber;
	public function getOrderNumber() {
		return $this->orderNumber;
	}
	
	public function setOrderNumber($orderNumber) {
		$this->orderNumber = $orderNumber;
		return $this;
	}

	/**
	*Identifier of the cart prior to the customer proceeding to checkout.
	*/
	public $originalCartId;
	public function getOriginalCartId() {
		return $this->originalCartId;
	}
	
	public function setOriginalCartId($originalCartId) {
		$this->originalCartId = $originalCartId;
		return $this;
	}

	/**
	*If this order was created to fulfill an item replacement as part of a return merchandise authorization (RMA), the unique identifier of the return.
	*/
	public $parentReturnId;
	public function getParentReturnId() {
		return $this->parentReturnId;
	}
	
	public function setParentReturnId($parentReturnId) {
		$this->parentReturnId = $parentReturnId;
		return $this;
	}

	/**
	*Status of the payment for the specified order.
	*/
	public $paymentStatus;
	public function getPaymentStatus() {
		return $this->paymentStatus;
	}
	
	public function setPaymentStatus($paymentStatus) {
		$this->paymentStatus = $paymentStatus;
		return $this;
	}

	/**
	*Status of any returns associated with this order after it was completed.
	*/
	public $returnStatus;
	public function getReturnStatus() {
		return $this->returnStatus;
	}
	
	public function setReturnStatus($returnStatus) {
		$this->returnStatus = $returnStatus;
		return $this;
	}

		public $shippingSubTotal;
	public function getShippingSubTotal() {
		return $this->shippingSubTotal;
	}
	
	public function setShippingSubTotal($shippingSubTotal) {
		$this->shippingSubTotal = $shippingSubTotal;
		return $this;
	}

	/**
	*The total amount of sales tax incurred for shipping charges on the order.
	*/
	public $shippingTaxTotal;
	public function getShippingTaxTotal() {
		return $this->shippingTaxTotal;
	}
	
	public function setShippingTaxTotal($shippingTaxTotal) {
		$this->shippingTaxTotal = $shippingTaxTotal;
		return $this;
	}

	/**
	*Amount of the shipping fees for the order.
	*/
	public $shippingTotal;
	public function getShippingTotal() {
		return $this->shippingTotal;
	}
	
	public function setShippingTotal($shippingTotal) {
		$this->shippingTotal = $shippingTotal;
		return $this;
	}

	/**
	*Unique identifier of the site.
	*/
	public $siteId;
	public function getSiteId() {
		return $this->siteId;
	}
	
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
		return $this;
	}

	/**
	*The device from which the order originated in the case of offline orders.
	*/
	public $sourceDevice;
	public function getSourceDevice() {
		return $this->sourceDevice;
	}
	
	public function setSourceDevice($sourceDevice) {
		$this->sourceDevice = $sourceDevice;
		return $this;
	}

	/**
	*The current status of this order. Possible values are "New", "Open", "Processing", "Closed", or "Cancelled". System-supplied and read-only.
	*/
	public $status;
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}

	/**
	*The date and time the order was submitted. System-supplied and read-only.
	*/
	public $submittedDate;
	public function getSubmittedDate() {
		return $this->submittedDate;
	}
	
	public function setSubmittedDate($submittedDate) {
		$this->submittedDate = $submittedDate;
		return $this;
	}

	/**
	*Amount of the order without sales tax, shipping costs, and other fees.
	*/
	public $subtotal;
	public function getSubtotal() {
		return $this->subtotal;
	}
	
	public function setSubtotal($subtotal) {
		$this->subtotal = $subtotal;
		return $this;
	}

	/**
	*The total monetary sum of sales tax for the order.
	*/
	public $taxTotal;
	public function getTaxTotal() {
		return $this->taxTotal;
	}
	
	public function setTaxTotal($taxTotal) {
		$this->taxTotal = $taxTotal;
		return $this;
	}

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;
	public function getTenantId() {
		return $this->tenantId;
	}
	
	public function setTenantId($tenantId) {
		$this->tenantId = $tenantId;
		return $this;
	}

	/**
	*Amount of the order, including items, sales tax, shipping costs, and other fees.
	*/
	public $total;
	public function getTotal() {
		return $this->total;
	}
	
	public function setTotal($total) {
		$this->total = $total;
		return $this;
	}

	/**
	*The total amount collected to date for the order.
	*/
	public $totalCollected;
	public function getTotalCollected() {
		return $this->totalCollected;
	}
	
	public function setTotalCollected($totalCollected) {
		$this->totalCollected = $totalCollected;
		return $this;
	}

		public $version;
	public function getVersion() {
		return $this->version;
	}
	
	public function setVersion($version) {
		$this->version = $version;
		return $this;
	}

		public $visitId;
	public function getVisitId() {
		return $this->visitId;
	}
	
	public function setVisitId($visitId) {
		$this->visitId = $visitId;
		return $this;
	}

		public $webSessionId;
	public function getWebSessionId() {
		return $this->webSessionId;
	}
	
	public function setWebSessionId($webSessionId) {
		$this->webSessionId = $webSessionId;
		return $this;
	}

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;
	public function getItems() {
		return $this->items;
	}
	
	public function setItems($items) {
		$this->items = $items;
		return $this;
	}

	/**
	*Properties of an ad-hoc price adjustment for an order.
	*/
	public $adjustment;
	public function getAdjustment() {
		return $this->adjustment;
	}
	
	public function setAdjustment($adjustment) {
		$this->adjustment = $adjustment;
		return $this;
	}

	/**
	*Paged list collection of order attributes.
	*/
	public $attributes;
	public function getAttributes() {
		return $this->attributes;
	}
	
	public function setAttributes($attributes) {
		$this->attributes = $attributes;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
	*/
	public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

	/**
	*Container for the customer billing information associated with an order.
	*/
	public $billingInfo;
	public function getBillingInfo() {
		return $this->billingInfo;
	}
	
	public function setBillingInfo($billingInfo) {
		$this->billingInfo = $billingInfo;
		return $this;
	}

	/**
	*Paged list of notes entered when the order was modified.
	*/
	public $changeMessages;
	public function getChangeMessages() {
		return $this->changeMessages;
	}
	
	public function setChangeMessages($changeMessages) {
		$this->changeMessages = $changeMessages;
		return $this;
	}

		public $fulfillmentInfo;
	public function getFulfillmentInfo() {
		return $this->fulfillmentInfo;
	}
	
	public function setFulfillmentInfo($fulfillmentInfo) {
		$this->fulfillmentInfo = $fulfillmentInfo;
		return $this;
	}

	/**
	*Paged list collection of order notes.
	*/
	public $notes;
	public function getNotes() {
		return $this->notes;
	}
	
	public function setNotes($notes) {
		$this->notes = $notes;
		return $this;
	}

	/**
	*List of order-level discounts that apply to the order.
	*/
	public $orderDiscounts;
	public function getOrderDiscounts() {
		return $this->orderDiscounts;
	}
	
	public function setOrderDiscounts($orderDiscounts) {
		$this->orderDiscounts = $orderDiscounts;
		return $this;
	}

	/**
	*Wrapper for the physical packages shipped for the specified order.
	*/
	public $packages;
	public function getPackages() {
		return $this->packages;
	}
	
	public function setPackages($packages) {
		$this->packages = $packages;
		return $this;
	}

	/**
	*Wrapper for a collection of payments associated with this order. An order can include any number of payments.
	*/
	public $payments;
	public function getPayments() {
		return $this->payments;
	}
	
	public function setPayments($payments) {
		$this->payments = $payments;
		return $this;
	}

		public $pickups;
	public function getPickups() {
		return $this->pickups;
	}
	
	public function setPickups($pickups) {
		$this->pickups = $pickups;
		return $this;
	}

		public $shipments;
	public function getShipments() {
		return $this->shipments;
	}
	
	public function setShipments($shipments) {
		$this->shipments = $shipments;
		return $this;
	}

	/**
	*Properties of an ad-hoc price adjustment made for an order.
	*/
	public $shippingAdjustment;
	public function getShippingAdjustment() {
		return $this->shippingAdjustment;
	}
	
	public function setShippingAdjustment($shippingAdjustment) {
		$this->shippingAdjustment = $shippingAdjustment;
		return $this;
	}

	/**
	*List of shipping discounts to apply to the order.
	*/
	public $shippingDiscounts;
	public function getShippingDiscounts() {
		return $this->shippingDiscounts;
	}
	
	public function setShippingDiscounts($shippingDiscounts) {
		$this->shippingDiscounts = $shippingDiscounts;
		return $this;
	}

	/**
	*A paged list collection of shopper notes for the order.
	*/
	public $shopperNotes;
	public function getShopperNotes() {
		return $this->shopperNotes;
	}
	
	public function setShopperNotes($shopperNotes) {
		$this->shopperNotes = $shopperNotes;
		return $this;
	}

		public $validationResults;
	public function getValidationResults() {
		return $this->validationResults;
	}
	
	public function setValidationResults($validationResults) {
		$this->validationResults = $validationResults;
		return $this;
	}

}

?>
