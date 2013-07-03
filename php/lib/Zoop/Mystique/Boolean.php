<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Boolean extends Base
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( $value !== true && $value !== false ){
            $result->setValue(false);
            $result->addMessage('boolean');
        }

        return $result;
    }
}
