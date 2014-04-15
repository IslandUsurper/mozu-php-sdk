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
*	Details of the property such as its name and description, whether it is a configurable option, and how many products have this attribute. A product detail that a merchant can define to add to the product base type. Define details, such as specifications, to describe products. Create attributes to share across several or all products in a store or stores such as price, size, weight, color, and brand. Some attributes will apply to a specific type of product or a single product, for example, screen resolution or storage capacity. Create attributes separately from products to share common attributes across products.
*/
class Attribute
{
	/**
	*The name of the product associated with this attribute as it appears in the Product Admin.
	*/
	public $adminName;

	/**
	*Unique identifier of the attribute. Must be unique within a namespace and cannot be changed once referenced by productTypes. This value will be generated to match the attribute sequence if it is not provided during creation.
	*/
	public $attributeCode;

	/**
	*Unique sequence for each attribute and data type combination created. System-supplied and read-only.
	*/
	public $attributeDataTypeSequence;

	/**
	*"The fully qualified name of the attribute, which is a user defined attribute identifier."
	*/
	public $attributeFQN;

	/**
	*Indicates the order position of the attribute.
	*/
	public $attributeSequence;

	/**
	*The data type of the attribute. There are four valid data types: "Bool", "DateTime", "Number", "String"
	*/
	public $dataType;

	/**
	*The storefront interface input type for this attribute such as a radio button or drop-down menu selection.
	*/
	public $inputType;

	/**
	*If true, this entity is marked as an optional choice.
	*/
	public $isExtra;

	/**
	*If true, the entity is available as an option. If false, the entity is not available as an option.
	*/
	public $isOption;

	/**
	*If true, the entity is an available property.
	*/
	public $isProperty;

		public $masterCatalogId;

	/**
	*Registered namespace associated with this attribute. If no namespace was entered when the attribute was created, the tenant namespace is used.
	*/
	public $namespace;

	/**
	*An attribute value type is either predefined vocabulary by the admin during product attribute set up or it can be "AdminEntered" or "ShopperEntered". The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $valueType;

	/**
	*List of metadata associated with the attribute.
	*/
	public $attributeMetadata;

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

	/**
	*Validates the attribute configured for the product in the storefront against the attribute configured in product admin.
	*/
	public $validation;

	/**
	*Container for a list of the vocabulary values for the specified attribute. For example, for a "color" attribute, vocabulary values might include "red," "green," and "blue."
	*/
	public $vocabularyValues;

}

?>
