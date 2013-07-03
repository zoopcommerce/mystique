<?php

$view = new \StdClass;
$view->sectionId = 'int';
$view->sectionHeading = 'Int';

$view->description = '<p>Returns true if the test value is an integer, or can be parsed to an integer.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Int;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Int'], function(Int){
    var validator = new Int,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Int,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';