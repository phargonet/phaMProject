<?php
/**
 * phaMController class file.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link https://github.com/phargo/phaMProject
 * @copyright Copyright &copy; 2011 PhArgo.net
 * @license Dual licensed under the MIT or GPL Version 2 licenses:
 *      - https://github.com/phargo/phaMProject/blob/master/MIT-LICENSE
 *      - https://github.com/phargo/phaMProject/blob/master/GPL-LICENSE
 * @package phaMProject
 */

/**
 * phaMController is customized base controller {@link CController}
 * From phaMController MAST inheritance all other controllers
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 */
class phaMController extends CController {

    /**
     * Version of JQuery Mobile
     *
     * @var string
     */
    const JQ_MOBILE_VERSION = '1.0a4';

    /**
     * The default layout for the controller view.
     * Define page of mobile application.
     * @var string Defaults to 'ext.MProject.views.layouts.page'
     */
    public $layout = 'ext.phaMProject.views.layouts.page';

    /**
     * Initializes the controller.
     * This method is called by the application before the controller starts to execute.
     * You may override this method to perform the needed initialization for the controller.
     */
    public function init() {
        parent::init();

        $app = Yii::app();
        $app->clientScript->registerCoreScript('jquery');

        $mobileAsserts = $app->getComponent('assetManager')->publish(Yii::getPathOfAlias('ext.phaMProject.vendors.jqmobile'));
        if (defined('YII_DEBUG') and YII_DEBUG) {
            $postfix = '';
        }
        else {
            $postfix = '.min';
        }
        $app->clientScript->registerScriptFile($mobileAsserts . '/jquery.mobile-' .self::JQ_MOBILE_VERSION . $postfix . '.js');
        $app->clientScript->registerCssFile($mobileAsserts . '/themes/default/jquery.mobile-' .self::JQ_MOBILE_VERSION . $postfix . '.css'); // @todo define team in config
    }
}