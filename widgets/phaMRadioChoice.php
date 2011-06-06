<?php
/**
 * phaMRadioChoice class file.
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
 * phaMRadioChoice defines widget for building
 *
 * @see http://jquerymobile.com/demos/1.0a4.1/#docs/forms/forms-slider.html
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
class phaMRadioChoice extends phaMElements {

    /**
     * Define type of display block
     *  - vertical (@link MDataType::VERTICAL)
     *  - horizontal (@link MDataType::HORIZONTAL)
     *
     * @var string
     */
    public $type = MDataType::VERTICAL;

    /**
     * Label for radio group
     * Empty by default. If value is empty, label is not generate
     *
     * @var string
     */
    public $legend = '';

    /**
     * Data for bilding radio group
     * Each item may have the following characteristics:
     *  - text - text witch will be shown to the user as this item. It's required field!
     *  - value - value that will be send to server when you select this item. It's required field!
     *  - checked (true or false) define selected item. Not required, by default is false.
     * Output order is determined by the order of listing elements
     *
     * @var array
     */
    public $items = array();

    /**
     * Set name attribute for radio group.
     * This name will be send to server whith selected value.
     *
     * @var string
     */
    public $name;

    /**
     * Executes the slider widget.
     * This method is called by {@link CBaseController::endWidget}.
     *
     * @exception CException If not defined required field in data for bilding
     */
    public function run() {
        echo CHtml::openTag('div', array('data-role' => MDataRole::FIELD_CONTAIN));
        echo CHtml::openTag('fieldset', array(
            'data-role' => MDataRole::CONTROL_GROUP,
            'data-type' => $this->type,
        ));

        if (!empty($this->legend)) {
            echo CHtml::tag('legend', array(), $this->legend);
        }

        if (empty($this->name)) {
            $this->name = $this->id;
        }

        $i = 0;
        foreach ($this->items as $item) {
            if (!isset($item['text']) or empty($item['text']) or !isset($item['value']) or empty($item['value'])) {
                throw new CException('Required characteristic is not set or empty!');
            }
            $id = $this->id . '-' . $i;
            echo CHtml::tag('input', array(
                'type' => 'radio',
                'name' => $this->name,
                'id' => $id,
                'value' => $item['value'],
                'checked' => (isset($item['checked']) and $item['checked']===true)?1:0,
            ));
            echo CHtml::tag('label', array(
                'for' => $id,
            ), $item['text']);
            $i++;
        }

        echo CHtml::closeTag('fieldset');
        echo CHtml::closeTag('div');
    }
}