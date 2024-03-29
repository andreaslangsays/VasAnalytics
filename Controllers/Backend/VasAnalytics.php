<?php

/**
 * Backend controllers extending from Shopware_Controllers_Backend_Application do support the new backend components
 */
class Shopware_Controllers_Backend_VasAnalytics extends Shopware_Controllers_Backend_Application
{
    protected $model = \Statistics::class;

    protected $alias = 'statistics';
}
