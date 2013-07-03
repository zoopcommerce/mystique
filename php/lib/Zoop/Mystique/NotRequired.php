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
class NotRequired extends Base
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);
        $this->haltOnPass = false;

        if ( !isset($value) || $value == ''){
            $this->haltOnPass = true;
        }

        return $result;
    }
}
