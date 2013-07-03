<?php

$view = new \StdClass;
$view->sectionId = 'cvv';
$view->sectionHeading = 'Cvv';

$view->description = '<p>Returns true if the test value appears to be a valid credit card Cvv.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Cvv;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Cvv'], function(Cvv){
    var validator = new Cvv,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Cvv,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';