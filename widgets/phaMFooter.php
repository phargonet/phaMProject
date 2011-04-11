<?php
/**
 * phaMFooter class file.
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
 * phaMFooter defines widget for building footer block, inside page.
 * Block is one of three mandatory units on a page - header, content, footer.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/pages/docs-pages.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMFooter extends CWidget {

    /**
     * Includes the ability to display the buttons in the block.
     * Necessary to put true, if it is withdrawn button.
     *
     * @var boolean
     */
    public $hasButtonBar = false;

    /**
     * Initializes the footer widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::FOOTER,
            //'data-position' => MPosition::FIXED,
            'class'  => $this->hasButtonBar?'ui-bar':''
        ));
    }

    /**
     * Executes the footer widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('div');
    }
}