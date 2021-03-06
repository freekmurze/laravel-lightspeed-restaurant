<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Inventory extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/inventory";
    }

    /**
     *    Get Products
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getProductsUsingGET
     */
    public function getProducts(array $data = null)
    {
        $endpoint = $this->endpoint("/product");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Delete product
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/deleteProductUsingDELETE
     */
    public function deleteProduct(string $productId)
    {
        $endpoint = $this->endpoint("/product/{$productId}");
        return $this->client->delete($endpoint);
    }

    /**
     *    Get product
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getProductUsingGET
     */
    public function getProduct(string $productId)
    {
        $endpoint = $this->endpoint("/product/{$productId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Patch product
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/patchProductUsingPATCH
     */
    public function patchProduct(string $productId, array $data)
    {
        $endpoint = $this->endpoint("/product/{$productId}");
        return $this->client->patch($endpoint, $data);
    }

    /**
     *    Update product
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/updateProductUsingPUT
     */
    public function updateProduct(string $productId, array $data)
    {
        $endpoint = $this->endpoint("/product/{$productId}");
        return $this->client->put($endpoint, $data);
    }

    /**
     *    Get subproducts
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getSubproductsUsingGET
     */
    public function getSubproducts(string $productId)
    {
        $endpoint = $this->endpoint("/product/{$productId}/subproduct");
        return $this->client->get($endpoint);
    }

    /**
     *    Delete subproduct
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/deleteSubProductUsingDELETE
     */
    public function deleteSubProduct(string $productId, string $subProductId)
    {
        $endpoint = $this->endpoint("/product/{$productId}/subproduct/{$subProductId}");
        return $this->client->delete($endpoint);
    }

    /**
     *    Add subproduct
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/addSubProductUsingPOST
     */
    public function addSubProduct(string $productId, string $subProductId)
    {
        $endpoint = $this->endpoint("/product/{$productId}/subproduct/{$subProductId}");
        return $this->client->post($endpoint);
    }

    /**
     *    Delete subproducts
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/deleteSubProductsUsingDELETE
     */
    public function deleteSubProducts(string $productId, array $data)
    {
        $endpoint = $this->endpoint("/product/{$productId}/subproduct");
        return $this->client->delete($endpoint, $data);
    }

    /**
     *    Add subproducts
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/addSubProductsUsingPOST
     */
    public function addSubProducts(string $productId, array $data)
    {
        $endpoint = $this->endpoint("/product/{$productId}/subproduct");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get product groups
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getProductGroupsUsingGET
     */
    public function getProductGroups(array $data = null)
    {
        $endpoint = $this->endpoint("/productgroup");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get product group
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getProductGroupUsingGET
     */
    public function getProductGroup(string $productGroupId)
    {
        $endpoint = $this->endpoint("/productgroup/{$productGroupId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Get products
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/getProductsUsingGET_1
     */
    public function getProductGroupProducts(string $productGroupId, array $data = null)
    {
        $endpoint = $this->endpoint("/productgroup/{$productGroupId}/product");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Add product
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/inventory/addProductUsingPOST
     */
    public function addProduct(string $productGroupId, array $data)
    {
        $endpoint = $this->endpoint("/productgroup/{$productGroupId}/product");
        return $this->client->post($endpoint, $data);
    }
}
