<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Chain;
use Zoop\Mystique\Alpha;
use Zoop\Mystique\NotRequired;

class NotRequiredTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new Chain(['validators' => [
            new NotRequired,
            new Alpha
        ]]);

        $testData = ['data' => [
            ['value' => null, 'result' => true],
            ['value' => '123', 'result' => false],
            ['value' => 'abc', 'result' => true],
        ]];

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
