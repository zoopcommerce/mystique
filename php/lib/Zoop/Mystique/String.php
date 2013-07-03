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
class String extends Base
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( ! is_string($value)) {
            $result->setValue(false);
            $result->addMessage('string');
        }

        return $result;
    }
}
