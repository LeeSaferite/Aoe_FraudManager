<?php

class Aoe_FraudManager_Helper_Data extends Aoe_Layout_Helper_Data
{
    /**
     * Retrieve url
     *
     * @param   string $route
     * @param   array  $params
     *
     * @return  string
     */
    protected function _getUrl($route, $params = [])
    {
        return Mage::helper('adminhtml/data')->getUrl($route, $params);
    }
}
