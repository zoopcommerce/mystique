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
class CreditCard extends Base
{

    protected $cardInfo = [
        // summary:
        //		A dictionary list of credit card abbreviations
        // description:
        //		A hash of valid CC abbreviations and regular expressions
        //
        //		- mc: Mastercard
        //		- ec: Eurocard
        //		- vi: Visa
        //		- ax: American Express
        //		- dc: Diners Club
        //		- bl: Carte Blanch
        //		- di: Discover
        //		- jcb: JCB
        //		- er: Enroute
        // example:
        //		Define your own card, gift-card, whatever. Starts with 7,
        //		is 15 total length.
        //	| 	"my":"7[0-9]{14}"


        'mc' => '5[1-5][0-9]{14}',
        'ec' => '5[1-5][0-9]{14}',
        'vi' => '4(?:[0-9]{12}|[0-9]{15})',
        'ax' => '3[47][0-9]{13}',
        'dc' => '3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
        'bl' => '3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
        'di' => '6011[0-9]{12}',
        'jcb' => '(?:3[0-9]{15}|(2131|1800)[0-9]{11})',
        'er' => '2(?:014|149)[0-9]{11}'
    ];

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        $value = preg_replace('/[- ]/', '', $value);
        
        foreach($this->cardInfo as $regex){
            if (preg_match('/^' . $regex . '$/', $value)){
                return $result;
            }
        }

        $result->setValue(false);
        $result->addMessage('creditCard');

        return $result;
    }
}
