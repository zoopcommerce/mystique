<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Length;

class LengthTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $testData = json_decode(file_get_contents(__DIR__ . '/../../../../../common/testdata/length.json'), true);

        foreach ($testData['data'] as $testPoint){

            $validator = new Length($testPoint['options']);

            $result = $validator->isValid($testPoint['value']);
            if ($testPoint['result']){
                $this->assertTrue($result->getValue());
            } else {
                $this->assertFalse($result->getValue());
            }
        }
    }
}
