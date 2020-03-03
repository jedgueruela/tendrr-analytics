<?php
/**
 * Tendrr Analytics plugin for Craft CMS 3.x
 *
 * Custom analytics charting for Tendrr
 *
 * @link      https://cell5.co.uk
 * @copyright Copyright (c) 2020 Jed Gueruela
 */

namespace jedgueruela\tendrranalytics\assetbundles\analyticscpsection;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * AnalyticsCPSectionAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Jed Gueruela
 * @package   TendrrAnalytics
 * @since     1.0.0
 */
class AnalyticsCPSectionAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@jedgueruela/tendrranalytics/assetbundles/analyticscpsection/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/Analytics.js',
        ];

        $this->css = [
            'css/Analytics.css',
        ];

        parent::init();
    }
}
