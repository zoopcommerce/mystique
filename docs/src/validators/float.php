<?php

$view = new \StdClass;
$view->sectionId = 'float';
$view->sectionHeading = 'Float';

$view->description = '<p>Returns true if the test value is numeric.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Float;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Float'], function(Float){
    var validator = new Float,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Float,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';