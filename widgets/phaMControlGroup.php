<?php
/**
 * phaMControlGroup class file.
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
 * phaMControlGroup defines widget for building group for any buttons.
 *
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/buttons/buttons-grouped.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 *
 * @todo will add methods addButton(s)
 */
class phaMControlGroup extends phaMElements {

    /**
     * Initializes the group widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::CONTROL_GROUP,
            'data-type' => MDataType::HORIZONTAL,
            'data-theme' => $this->theme,
        ));
    }

    /**
     * Executes the group widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('div');
    }
}