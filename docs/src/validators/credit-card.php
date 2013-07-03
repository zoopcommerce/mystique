<?php

$view = new \StdClass;
$view->sectionId = 'creditCard';
$view->sectionHeading = 'Credit Card';

$view->description = '<p>Returns true if the test value appears to be a valid credit card number.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\CreditCard;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/CreditCard'], function(CreditCard){
    var validator = new CreditCard,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneExample = "
var validator = new mystique.CreditCard,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';