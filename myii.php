<?php
/**
 * Extended Yii bootstrap file.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link https://github.com/phargo/phaMProject
 * @copyright Copyright &copy; 2011 PhArgo.net
 * @license Dual licensed under the MIT or GPL Version 2 licenses:
 *      - https://github.com/phargo/phaMProject/blob/master/MIT-LICENSE
 *      - https://github.com/phargo/phaMProject/blob/master/GPL-LICENSE
 * @package phaMProject
 */

require_once (dirname(__FILE__).'/components/phaMApplication.php');

/**
 * It's a helper class extended framework functionalities.
 * It encapsulates {@link YiiBase} which provides the actual implementation.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @package phaMProject
 */
class Yii extends YiiBase {

    /**
     * Creates a mobile app instance.
     * Extends the basic set of Yii applications.
     *
     * @param mixed $config application configuration.
     * If a string, it is treated as the path of the file that contains the configuration;
     * If an array, it is the actual configuration information.
     * Please make sure you specify the {@link CApplication::basePath basePath} property in the configuration,
     * which should point to the directory containing all application logic, template and data.
     * If not, the directory will be defaulted to 'protected'.
     */
    static public function createMApplication( $config=null ) {
        return self::createApplication('phaMApplication',$config);
    }
}