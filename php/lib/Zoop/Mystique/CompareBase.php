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
abstract class CompareBase extends Base
{

    protected $compare = 0;

    public function getCompare() {
        return $this->compare;
    }

    public function setCompare($compare) {
        $this->compare = $compare;
    }

    public function __construct(array $options = []){
        if (isset($options['compare'])){
            $this->setCompare($options['compare']);
        }
    }
}
