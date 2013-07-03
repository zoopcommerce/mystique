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
class Slug extends Base
{

    protected $regex = '/^[a-z0-9-]+$/';

    protected $min = 3;

    protected $max = 255;

    public function getMin() {
        return $this->min;
    }

    public function setMin($min) {
        $this->min = (int) $min;
    }

    public function getMax() {
        return $this->max;
    }

    public function setMax($max) {
        $this->max = (int) $max;
    }

    public function __construct(array $options = []){
        if (isset($options['max'])){
            $this->setMax($options['max']);
        }
        if (isset($options['min'])){
            $this->setMin($options['min']);
        }
    }

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        $length = strlen($value);

        if ( ! preg_match($this->regex, $value) || $length < $this->min || $length > $this->max){
            $result->setValue(false);
            $result->addMessage(['slug', $this->min, $this->max]);
        }

        return $result;
    }
}
