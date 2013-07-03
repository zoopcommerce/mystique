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
class CreditCardExpiry extends Base
{

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if (
            ! preg_match('/^\d{1,2}$/', $value['month']) ||
            ! preg_match('/^\d\d\d\d$/', $value['year'])
        ){
            $result->setValue(false);
            $result->addMessage('creditCardExpiry');
            return $result;
        }

        $month = (int) $value['month'];
        $year = (int) $value['year'];

        $compareYear = date('Y');
        $compareMonth = date('n');

        if (
            $month < 1 ||
            $month > 12 ||
            $year < $compareYear ||
            ($year == $compareYear && $month < $compareMonth)
        ) {
            $result->setValue(false);
            $result->addMessage('creditCardExpiry');
        }

        return $result;
    }
}
