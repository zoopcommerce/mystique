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
class Required extends Base
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if (is_string($value)){
            $value = trim($value);
        }

        if ( !isset($value) || $value === null || $value === ''){
            $result->setValue(false);
            $result->addMessage('required');
        }

        if (is_array($value) && count($value) == 0){
            $result->setValue(false);
            $result->addMessage('required');
        }

        return $result;
    }
}
