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
class Regex extends Base
{

    protected $regex = '^$';

    public function getRegex() {
        return $this->regex;
    }

    public function setRegex($regex) {
        $this->regex = $regex;
    }

    public function __construct(array $options = []){
        if (isset($options['regex'])){
            $this->setRegex($options['regex']);
        }
    }

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( ! preg_match('/' . $this->regex . '/', $value)){
            $result->setValue(false);
            $result->addMessage(['regex', $this->regex]);
        }

        return $result;
    }
}
