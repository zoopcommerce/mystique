<?php

$view = new \StdClass;
$view->sectionId = 'less-than';
$view->sectionHeading = 'Less Than';

$view->description = '<p>Returns true if the test value is less than the compare value.</p>';

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
$validator = new Zoop\Mystique\LessThan(['compareValue' => $myCompareValue]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/LessThan'], function(LessThan){
    var validator = new LessThan({'compareValue': myCompareValue}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.LessThan({'compareValue': myCompareValue}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';