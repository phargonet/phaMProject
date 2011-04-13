<?php
/**
 * phaMButton class file.
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
 * phaMButton defines widget for building link as button.
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/buttons/index.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMButton extends CWidget {

    /**
     * URL which will be open by click
     *
     * @var string
     */
    public $href = '#';

    /**
     * Text on the button
     *
     * @var string
     */
    public $text = '';

    /**
     * Array defines icon for button/
     * Keys in array:
     *  - img - image for view on button. Value is one for constant from MIcons. Default is empty, i.e. - button without image.
     *  - position - image position on button. Value is one for constant from MIcons (POSITION_*). Defaul is MIcons::POSITION_LEFT
     * @var array
     */
    public $icon = array();

    /**
     * Button position in parent block
     *
     * @var string
     */
    public $position = 'left';

    /**
     * Executes the button widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        echo CHtml::tag(
            'a',
            array(
                'href' => $this->href,
                'data-role' => MDataRole::BUTTON,
                'data-icon' => isset($this->icon['img'])?$this->icon['img']:'',
                'data-iconpos' => isset($this->icon['position'])?$this->icon['position']:MIcons::POSITION_LEFT,
                'class' => 'ui-btn-' . $this->position,
            ),
            $this->text,
            true
        );
    }
}