<?php

$view = new \StdClass;
$view->sectionId = 'length';
$view->sectionHeading = 'Length';

$view->description = '<p>Returns true if the test value meets the specified length conditions.</p>';

$option = new \StdClass;
$option->name = 'min';
$option->type = 'int';
$option->default = '0';
$option->description = 'The minimum length.';
$view->options[] = $option;

$option = new \StdClass;
$option->name = 'max';
$option->type = 'int';
$option->default = '255';
$option->description = 'The maximum length.';
$view->options[] = $option;

ob_start();
?>
$validator = new Zoop\Mystique\Length(['min' => 10, 'max' => 20]) ;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Length'], function(Length){
    var validator = new Length({min: 10, max: 20}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Length({min: 10, max: 20}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';