<?php
require_once __DIR__ . '/../../../../../../BaseTest.php';

use Mozu\Tests\BaseTest;
use Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;

/**
 * Test class for ProductResource.
 * Generated by PHPUnit on 2013-09-25 at 15:38:56.
 */
class ProductResourceTest extends BaseTest
{
    /**
     * @var ProductResource
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    	BaseTest::Auth();
    	$apiContext = new ApiContext(7804,9931,1,1);
        $this->object = new ProductResource($apiContext);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProducts
     * @todo Implement testGetProducts().
     */
    public function testGetProducts()
    {
       $productCollection = $this->object->getProducts(DataViewMode::LIVE, null,FALSE, null, null, null, null, null);
       var_dump($productCollection);
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProduct
     * @todo Implement testGetProduct().
     */
    public function testGetProduct()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProductInSites
     * @todo Implement testGetProductInSites().
     */
    public function testGetProductInSites()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProductInSite
     * @todo Implement testGetProductInSite().
     */
    public function testGetProductInSite()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::addProduct
     * @todo Implement testAddProduct().
     */
    public function testAddProduct()
    {
        
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::addProductInSite
     * @todo Implement testAddProductInSite().
     */
    public function testAddProductInSite()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::updateProductStock
     * @todo Implement testUpdateProductStock().
     */
    public function testUpdateProductStock()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::updateProduct
     * @todo Implement testUpdateProduct().
     */
    public function testUpdateProduct()
    {
      
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::updateProductInSites
     * @todo Implement testUpdateProductInSites().
     */
    public function testUpdateProductInSites()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::updateProductInSite
     * @todo Implement testUpdateProductInSite().
     */
    public function testUpdateProductInSite()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::deleteProduct
     * @todo Implement testDeleteProduct().
     */
    public function testDeleteProduct()
    {
       
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::deleteProductInSite
     * @todo Implement testDeleteProductInSite().
     */
    public function testDeleteProductInSite()
    {
        
    }
}
?>
