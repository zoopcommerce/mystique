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
class Cvv extends Chain
{

    public function __construct(array $options = []){
        $this->setValidators([
            new Length(['min' =>  3, 'max' => 4]),
            new Int
        ]);
    }
}
