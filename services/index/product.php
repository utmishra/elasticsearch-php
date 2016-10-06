<?php
namespace ESPHP/Services/Index;
include '../config/config.php';

class Product {
	function index() {
		$elasticIndex = $client->getIndex('prodcat5');
		$elasticType = $elasticIndex->getType('prod');

		//create a document
		$docData = array(
				'product_mrp' => 234,
				'product_ratings' => 3.4,
				'quantity' => 100,
				'category_name' => 'Dairy Products',
				'sub_category' => 'Milk products',
				'product_image_url' => 'http://www.officezarurat.com/image/cache/catalog/ishhar/Nestel%20link-350x350.jpg',
				'product_short_name' => 'Nestle A+ Nourish milk'
			);
		$document = new \Elastica\Document(1, $docData);

		//Add document to type
		$elasticType->addDocument($document);
	}
}