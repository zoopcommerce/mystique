<?php

$view = new \StdClass;
$view->sectionId = 'date';
$view->sectionHeading = 'Date';

$view->description = '<p>Returns true if the test value appears is a Date object.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Date;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Date'], function(Date){
    var validator = new Date,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Date,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';