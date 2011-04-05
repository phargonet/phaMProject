<?php
/**
 * phaMApplication class file.
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
 * phaMApplication extends CWebApplication by providing functionalities specific
 * for mobile application.
 *
 * phaMApplication defines the default controller, specific layout, and initializes app.
 * Core application components provides CWebApplication.
 *
 * @author Vadim
 * @package phaMProject
 */
class phaMApplication extends CWebApplication {
    /**
     * The route of the default controller, action or module.
     *
     * @return string  Defaults to 'pages'.
     */
    public $defaultController='pages';

    /**
     * The application-wide layout. Defaults to 'main' (path to layoyt is ext.phaMProject.views.layouts).
     *
     * @var string
     */
    public $layout='ext.phaMProject.views.layouts.main';

    /**
     * Initializes the application.
     * This method overrides the parent implementation by preloading the 'request' component.
     *
     * @return void
     */
    public function init() {
        parent::init();
        $this->setLayoutPath(Yii::getPathOfAlias('ext.phaMProject.views.layouts'));
        Yii::import('ext.phaMProject.jqconst.*');
    }

}