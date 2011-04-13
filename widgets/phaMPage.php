<?php
/**
 * phaMPage class file.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link https://github.com/phargo/phaMProject
 * @copyright Copyright &copy; 2011 PhArgo.net
 * @license Dual licensed under the MIT or GPL Version 2 licenses:
 *      - https://github.com/phargo/phaMProject/blob/master/MIT-LICENSE
 *      - https://github.com/phargo/phaMProject/blob/master/GPL-LICENSE
 * @package phaMProject
 * @subpackage Widgets
 */

/**
 * phaMPage defines widget for building main block - Page.
 * This block is mainly a container for the remaining blocks on the page.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/pages/docs-pages.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMPage extends phaMElements {

    /**
     * Defines view (or no) back linking button (to back page)
     *
     * @var boolean
     */
    public $noBackBtn = false;

    /**
     * Initializes the page widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::PAGE,
            'nobackbtn' => $this->noBackBtn,
            'id' => 'main_page', // TODO external define ID
            'data-theme' => $this->theme,
        ));
    }

    /**
     * Executes the page widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('div');
    }
}