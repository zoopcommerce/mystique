<?php

$view = new \StdClass;
$view->sectionId = 'greater-than';
$view->sectionHeading = 'Greater Than';

$view->description = '<p>Returns true if the test value is greater than the compare value.</p>';

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
$validator = new Zoop\Mystique\GreaterThan(['compareValue' => $myCompareValue]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/GreaterThan'], function(GreaterThan){
    var validator = new GreaterThan({'compareValue': myCompareValue}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.GreaterThan({'compareValue': myCompareValue}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';