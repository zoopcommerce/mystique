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
class Password extends Base
{

    protected $length;

    protected $containAlphaRegEx = '/[a-zA-Z]/';

    protected $containNumRegEx = '/[0-9]/';

    public function __construct(array $options = []){
        $this->length = new Length(['min' => 6, 'max' => 40]);
    }

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( ! $this->length->isValid($value)->getValue()){
            $result->setValue(false);
            $result->addMessage('passwordLength');
        }

        if ( ! preg_match($this->containAlphaRegEx, $value)){
            $result->setValue(false);
            $result->addMessage('passwordAlpha');
        }

        if ( ! preg_match($this->containNumRegEx, $value)){
            $result->setValue(false);
            $result->addMessage('passwordNum');
        }

        return $result;
    }
}
