<?php

namespace Training\Test\Plugin;

class Test
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 1;
    }
}