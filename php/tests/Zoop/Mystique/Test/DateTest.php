<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique\Test;

use Zoop\Mystique\Date;

class DateTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new Date;

        $testData = json_decode(file_get_contents(__DIR__ . '/../../../../../common/testdata/date.json'), true);

        foreach ($testData['data'] as $testPoint){

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
