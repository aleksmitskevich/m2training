<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 9/14/18
 * Time: 11:23 PM
 */

namespace Training\Test\MagentoU;

class Test
{
    protected $productRepository;
    protected $productFactory;
    protected $unit1ProductRepository;
    protected $session;
    protected $justAParameter;
    protected $data;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        //\Training\Test\Api\ProductRepositoryInterface $unit1ProductRepository,
        $justAParameter = false,
        array $data
    ) {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->session = $session;
        //$this->unit1ProductRepository = $unit1ProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo get_class($this->productRepository) . '<br/>';
        echo get_class($this->productFactory) . '<br/>';
        echo get_class($this->session) . '<br/>';
        //echo get_class($this->unit1ProductRepository) . '<br/>';
        echo $this->justAParameter . '<br/>';
        //print_r($this->data, true);
        foreach($this->data as $result) {
            echo $result, '<br>';
        }


    }
}