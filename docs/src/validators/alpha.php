<?php

$view = new \StdClass;
$view->sectionId = 'alpha';
$view->sectionHeading = 'Alpha';

$view->description = '<p>Returns true if the test value contains only alpha characters.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Alpha;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Alpha'], function(Alpha){
    var validator = new Alpha,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Alpha,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';