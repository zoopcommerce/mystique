<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Length;

class I18nMessagesTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new Length(['min' => 1, 'max' => 5]);

        $result = $validator->isValid('123456');

        $this->assertEquals('Must be between 1 and 5 characters long', $result->getMessages()[0]);
    }
}
