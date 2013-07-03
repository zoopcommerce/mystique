<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Cvv;

class CvvTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new Cvv;

        $testData = json_decode(file_get_contents(__DIR__ . '/../../../../../common/testdata/cvv.json'), true);

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
