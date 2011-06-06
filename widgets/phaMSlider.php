<?php
/**
 * phaMSlider class file.
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
 * phaMSlider defines widget for building slider widget to your page,
 * start with an input with a new HTML5 type="range" attribute.
 * Specify the current value, min and max attribute values to configure the slider.
 *
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/forms/forms-slider.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMSlider extends phaMElements {

    /**
     * Set name attribute for slider.
     * This name will be send to server whith selected value.
     *
     * @var string
     */
    public $name;

    /**
     * Label for slider
     *
     * @var string
     */
    public $label;

    /**
     * Values settings for slider
     * Default value is:
     *  - current = 0
     *  - max = 100
     *  - min =0
     *
     * @var array
     */
    public $value = array(
        'current' => 0,
        'max' => 100,
        'min' => 0,
    );

    /**
     * Executes the slider widget.
     * This method is called by {@link CBaseController::endWidget}.
     */
    public function run() {
        if (empty($this->name)) {
            $this->name = $this->id;
        }

        echo CHtml::openTag('div', array(
            'data-role' => MDataRole::FIELD_CONTAIN,
        ));

        echo CHtml::tag('label', array(
            'for' => $this->id),
            $this->label
        );

        echo CHtml::tag('input', array(
            'type' => 'range',
            'name' => $this->name,
            'id'   => $this->id,
            'value'=> intval($this->value['current']),
            'min'  => intval($this->value['min']),
            'max'  => intval($this->value['max'])
        ));

        echo CHtml::closeTag('div'); // fieldcontain
    }
}