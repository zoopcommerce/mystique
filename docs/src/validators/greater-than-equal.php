<?php

$view = new \StdClass;
$view->sectionId = 'greater-than-equal';
$view->sectionHeading = 'Greater Than or Equal';

$view->description = '<p>Returns true if the test value is greater than or equal to the compare value.</p>';

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
$validator = new Zoop\Mystique\GreaterThanEqual(['compareValue' => $myCompareValue]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/GreaterThanEqual'], function(GreaterThanEqual){
    var validator = new GreaterThanEqual({'compareValue': myCompareValue}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.GreaterThanEqual({'compareValue': myCompareValue}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';