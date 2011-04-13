<?php
/**
 * phaMHeader class file.
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
 * phaMHeader defines widget for building header block, inside page.
 * Block is one of three mandatory units on a page - header, content, bottom.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/pages/docs-pages.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMHeader extends phaMElements {

    /**
     * Initializes the header widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::HEADER,
            'data-theme' => $this->theme,
        ));
    }

    /**
     * Executes the header widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('div');
    }
}