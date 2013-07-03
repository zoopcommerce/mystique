<?php

$view = new \StdClass;
$view->sectionId = 'password';
$view->sectionHeading = 'Password';

$view->description = '<p>Returns true if the test value is likely to be a strong password. Length must be between 6 and 40 characters. Must contain at least one alpha and one numeric character.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Password;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Password'], function(Password){
    var validator = new Password,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.Password,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';