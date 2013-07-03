<?php

$view = new \StdClass;
$view->sectionId = 'hex-color';
$view->sectionHeading = 'Hex Color';

$view->description = '<p>Returns true if the test value is a valid hexadecimal color code prefixed with <code>#</code>.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\HexColor;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/HexColor'], function(HexColor){
    var validator = new HexColor,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.HexColor,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';