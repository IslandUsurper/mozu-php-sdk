<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\CategoryClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the Categories resource to organize products and control where they appear on the storefront. Create and maintain a hierarchy of categories and subcategories where the site will store properties.
*/
class CategoryResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product category search results by any of its properties, including its position in the category hierarchy. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CategoryPagedCollection 
	*/
	public function getCategories($filter, $pageSize, $sortBy, $startIndex)
	{
		$mozuClient = CategoryClient::getCategoriesClient($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to retrieve.
	* @return Category 
	*/
	public function getCategory($categoryId)
	{
		$mozuClient = CategoryClient::getCategoryClient($categoryId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the subcategories of a category. This is a list of subcategories at the same level (siblings). Use a list of siblings, for example, to display the categories in a horizontal list.
	*
	* @param int $categoryId Unique identifier of the category whose subcategories are retrieved.
	* @return CategoryCollection 
	*/
	public function getChildCategories($categoryId)
	{
		$mozuClient = CategoryClient::getChildCategoriesClient($categoryId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new category to the site's category hierarchy. Specify a ParentCategoryID to determine where to locate the category in the hierarchy. If a ParentCategoryID is not specified, the new category becomes a top-level category.
	*
	* @param Category $category Properties of the new category. Required properties: ParentCategoryID and Content.Name.
	* @return Category 
	*/
	public function addCategory($category)
	{
		$mozuClient = CategoryClient::addCategoryClient($category);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies a category such as moving it to another location in the category tree, or changing whether it is visible on the storefront. This PUT replaces the existing resource, so be sure to include all the information to maintain for the category.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. Default: False.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param Category $category Properties of the category to modify.
	* @return Category 
	*/
	public function updateCategory($cascadeVisibility, $categoryId, $category)
	{
		$mozuClient = CategoryClient::updateCategoryClient($cascadeVisibility, $categoryId, $category);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the category specified by its category ID.
	*
	* @param bool $cascadeDelete If true, any subcategories of a category are deleted when this category is deleted. Default: False.
	* @param int $categoryId Unique identifier of the category to delete.
	*/
	public function deleteCategoryById($cascadeDelete, $categoryId)
	{
		$mozuClient = CategoryClient::deleteCategoryByIdClient($cascadeDelete, $categoryId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>
