<?php

$view = new \StdClass;
$view->sectionId = 'string';
$view->sectionHeading = 'String';

$view->description = '<p>Returns true if the test value is a string.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\String;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/String'], function(String){
    var validator = new String,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.String,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';