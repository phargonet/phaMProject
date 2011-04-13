<?php
/**
 * phaMContent class file.
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
 * phaMContent defines widget for building content block, inside page.
 * This block has to be derived all the information component of the page.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/pages/docs-pages.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMContent extends phaMElements {

    /**
     * Initializes the content widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::CONTENT,
            'data-theme' => $this->theme,
        ));
    }

    /**
     * Executes the content widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('div');
    }
}