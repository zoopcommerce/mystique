<?php

$view = new \StdClass;
$view->sectionId = 'less-than-equal';
$view->sectionHeading = 'Less Than or Equal';

$view->description = '<p>Returns true if the test value is less than or equal to the compare value.</p>';

$option = new \StdClass;
$option->name = 'compareValue';
$option->type = 'numeric | string | date object';
$option->default = '0';
$option->description = 'The value to compare the test value with.';
$view->options = [
    $option
];

ob_start();
?>
$validator = new Zoop\Mystique\LessThanEqual(['compareValue' => $myCompareValue]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/LessThanEqual'], function(LessThanEqual){
    var validator = new LessThanEqual({'compareValue': myCompareValue}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.LessThanEqual({'compareValue': myCompareValue}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';