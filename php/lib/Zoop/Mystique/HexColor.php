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
class HexColor extends Base
{

    protected $regex = '/^#[0-9A-F]{6,6}$/';

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( ! preg_match($this->regex, $value)){
            $result->setValue(false);
            $result->addMessage('hexColor');
        }

        return $result;
    }
}
