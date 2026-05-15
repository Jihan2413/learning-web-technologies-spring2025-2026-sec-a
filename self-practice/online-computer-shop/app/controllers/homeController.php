<?php

require_once "../app/models/category.php";
require_once "../app/models/product.php";

class homeController {

    public function index() {

        $categoryModel = new category();
        $productModel = new product();

        $categories = $categoryModel->getCategories();
        $products = $productModel->featuredProducts();

        include "../app/views/home/index.php";
    }
}