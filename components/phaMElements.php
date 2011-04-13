<?php
/**
 * phaMElements class file.
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
 * phaMElements defines base class for all other elements (widgets).
 * This class contains the general for all children a theme field.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 * @subpackage Widgets
 */
abstract class phaMElements extends CWidget {

    /**
     * Theme of element
     *
     * @var string
     */
    private $team = MTheme::BY_DEFAULT;

    /**
     * Set current theme for element
     *
     * @param string $theme
     */
    public function setTheme($theme) {
        $this->team = $theme;
    }

    /**
     * Get current element's theme
     */
    public function getTheme() {
        return $this->team;
    }
}