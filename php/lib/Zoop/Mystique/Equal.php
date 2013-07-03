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
class Equal extends CompareBase
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ((!($value === $this->compare && !($value instanceof \DateTime))) &&
            !($value instanceof \DateTime && $this->compare instanceof \DateTime && $value == $this->compare)
        ){
            $result->setValue(false);
            $result->addMessage('equal');
        }

        return $result;
    }
}
