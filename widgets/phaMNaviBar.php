<?php
/**
 * phaMNaviBar class file.
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
 * phaMNaviBar defines widget for building navigation bar block.
 *
 * This block can be used inside other blocks.
 * The navbar items are set to divide the space evenly. The navbar maxes out
 * with 5 items, each 1/5 the width of the browser window.
 * If more than 5 items are added, the navbar will simply wrap to multiple lines.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/toolbars/docs-navbar.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMNaviBar extends phaMElements {

    /**
     * Initializes the navigation bar widget.
     * This method is called by {@link CBaseController::createWidget}
     * and {@link CBaseController::beginWidget} after the widget's
     * properties have been initialized.
     */
    public function init() {
        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::NAV_BAR,
            'data-theme' => $this->theme,
        ));
        echo CHtml::openTag('ul');
    }

    /**
     * Executes the navigation bar widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::closeTag('ul');
        echo CHtml::closeTag('div');
    }

    /**
     * Added one button into navigation block.
     *
     * @param array $conf Array defines configuration button. There is:
     *  - href - link to other page or element
     *  - isActive (boolean) - defines active button in bar
     *  - icon - icon for element. One of the option of class MIcons or user-defined value.
     *      Default is empty - button thereis text only
     *  - text - text on button. If text is empty, button there is only icon.
     *
     *  @todo process data-iconpos
     */
    public function addButton($conf = array()) {
        echo CHtml::openTag('li');
        echo CHtml::tag('a',
            array(
                'href' => isset($conf['href'])?$conf['href']:'#',
                'class' => (isset($conf['isActive']) and $conf['isActive']===true)?'ui-btn-active':'',
                'data-icon' => isset($conf['icon'])?$conf['icon']:'',
                'data-theme' => $this->theme,
            ), isset($conf['text'])?$conf['text']:false);
        echo CHtml::closeTag('li');
    }

    /**
     * Adds more than one button at a time.
     * Each button is described by the array element. This element contains array of
     * key => value, described in {@link phaMNaviBar::addButton}
     *
     * @param array $buttonsConfig
     */
    public function addButtons($buttonsConfig = array()) {
        foreach ($buttonsConfig as $config) {
            $this->addButton($config);
        }
    }
}