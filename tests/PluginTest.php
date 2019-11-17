<?php

namespace VasAnalytics\Tests;

use VasAnalytics\VasAnalytics as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'VasAnalytics' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['VasAnalytics'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
