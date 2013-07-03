<?php

$view = new \StdClass;
$view->sectionId = 'email';
$view->sectionHeading = 'Email';

$view->description = '<p>Returns true if the test value appears to be a valid email.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Email;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Email'], function(Email){
    var validator = new Email,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Email,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';