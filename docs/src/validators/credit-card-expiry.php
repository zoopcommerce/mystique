<?php

$view = new \StdClass;
$view->sectionId = 'creditCardExpiry';
$view->sectionHeading = 'Credit Card Expiry';

$view->description = '<p>Tests that the supplied value object is a valid two digit month and two digit year.</p>';

$view->phpComment = '<p>The value must be an associative array with the form <code>["month" => int, "year" => int]</code></p>';
ob_start();
?>
$validator = new Zoop\Mystique\CreditCardExpiry;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDComment = '<p>The value must be an object the form <code>{month: int, year: int}</code></p>';
$view->jsAMDExample = "
require(['mystique/CreditCardExpiry'], function(CreditCardExpiry){
    var validator = new CreditCardExpiry,
        result = validator.isValid(myValue);
});
";

$view->jsStandAloneComment = '<p>The value must be an object the form <code>{month: int, year: int}</code></p>';
$view->jsStandAloneExample = "
var validator = new mystique.CreditCardExpiry,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';