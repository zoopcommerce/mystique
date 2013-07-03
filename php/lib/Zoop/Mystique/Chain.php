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
class Chain extends Base
{

    protected $validators = [];

    public function getValidators() {
        return $this->validators;
    }

    public function setValidators(array $validators) {
        $this->validators = $validators;
    }

    public function __construct(array $options = []){
        if (isset($options['validators'])){
            $this->setValidators($options['validators']);
        }
    }

    protected function _isValid($value){

        $result = new Result(['value' => true]);

        foreach($this->validators as $validator){
            if ($result && method_exists($validator, 'getSkipOnPass') && $validator->getSkipOnPass()){
                continue;
            }
            if (! $result && method_exists($validator, 'getSkipOnFail') && $validator->getSkipOnFail()){
                continue;
            }
            $validatorResult = $validator->isValid($value);
            if ( ! $validatorResult->getValue()){
                $result->setValue(false);
                foreach ($validatorResult->getMessages() as $message){
                    $result->addMessage($message);
                }
                if (method_exists($validator, 'getHaltOnFail') && $validator->getHaltOnFail()){
                    return $result;
                }
            }
            if (method_exists($validator, 'getHaltOnPass') && $validator->getHaltOnPass()){
                return $result;
            }
        }

        return $result;
    }
}
