<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Password;

class PasswordTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new Password;

        $testData = json_decode(file_get_contents(__DIR__ . '/../../../../../common/testdata/password.json'), true);

        foreach ($testData['data'] as $testPoint){

            $result = $validator->isValid($testPoint['value']);

            if ($testPoint['result']){
                $this->assertTrue($result->getValue());
            } else {
                $this->assertFalse($result->getValue());
            }
        }
    }
}
