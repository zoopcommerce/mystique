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
abstract class Base implements ValidatorInterface
{

    //haltOnPass: boolean
    //     If this validator is part of a validator Group, setting
    //     to true will stop any Validators after this one
    //     from executing if this validator passes
    protected $haltOnPass = false;

    //haltOnFail: boolean
    //     If this validator is part of a validator Group, setting
    //     to true will stop any Validators after this one
    //     from executing if this validator fails
    protected $haltOnFail = false;

    //skipOnPass:
    //     If this validator is part of a validator Group, setting
    //     to true will skip evaluating this validator, if all previous
    //     validators have already evaluated to true
    protected $skipOnPass = false;

    //skipOnFail:
    //     If this validator is part of a validator Group, setting
    //     to true will skip evaluating this validator, if a previous
    //     validator has already evaluated to false
    protected $skipOnFail = false;

    public function getHaltOnPass() {
        return $this->haltOnPass;
    }

    public function setHaltOnPass($haltOnPass) {
        $this->haltOnPass = $haltOnPass;
    }

    public function getHaltOnFail() {
        return $this->haltOnFail;
    }

    public function setHaltOnFail($haltOnFail) {
        $this->haltOnFail = $haltOnFail;
    }

    public function getSkipOnPass() {
        return $this->skipOnPass;
    }

    public function setSkipOnPass($skipOnPass) {
        $this->skipOnPass = $skipOnPass;
    }

    public function getSkipOnFail() {
        return $this->skipOnFail;
    }

    public function setSkipOnFail($skipOnFail) {
        $this->skipOnFail = $skipOnFail;
    }

    public function isValid($value){
        return $this->_isValid($value);
    }

    abstract protected function _isValid($value);

    public function __construct(array $options = []){
    }
}
