<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\LessThanEqual;

class LessThanEquallTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $testData = json_decode(file_get_contents(__DIR__ . '/../../../../../common/testdata/lessThanEqual.json'), true);

        foreach ($testData['data'] as $testPoint){

            $compare = $testPoint['options']['compare'];
            if (isset($compare['day']) && isset($compare['month']) && isset($compare['year'])){
                $testPoint['options']['compare'] = new \DateTime($compare['year'] . '-' . $compare['month'] . '-' . $compare['day']);
            }

            $validator = new LessThanEqual($testPoint['options']);

            $value = $testPoint['value'];
            if (isset($value['day']) && isset($value['month']) && isset($value['year'])){
                $value = new \DateTime($value['year'] . '-' . $value['month'] . '-' . $value['day']);
            }
            
            $result = $validator->isValid($value);

            if ($testPoint['result']){
                $this->assertTrue($result->getValue());
            } else {
                $this->assertFalse($result->getValue());
            }
        }
    }
}
