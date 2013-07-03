<?php

$view = new \StdClass;
$view->sectionId = 'boolean';
$view->sectionHeading = 'Boolean';

$view->description = '<p>Returns true if the test value is a boolean.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Boolean;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Boolean'], function(Boolean){
    var validator = new Boolean,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Boolean,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';