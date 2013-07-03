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
class GreaterThanEqual extends CompareBase
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if (!($value >= $this->compare )){
            $result->setValue(false);
            $result->addMessage('greaterThanEqual');
        }

        return $result;
    }
}
