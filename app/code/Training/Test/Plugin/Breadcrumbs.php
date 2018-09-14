<?php

namespace Training\Test\Plugin;

class Breadcrumbs
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        //$crumbName = $crumbName . "(!)";
        $crumbInfo["label"]->__construct($crumbInfo["label"]->getText() . "(!)", []);
        return [$crumbName, $crumbInfo];
    }
}