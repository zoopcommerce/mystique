<?php

$view = new \StdClass;
$view->sectionId = 'not-required';
$view->sectionHeading = 'Not Required';

$view->description = '<p>Place this validator at the start of a chain. If the test value is nullish, it will immediately return true without evaluating subsiquent validators in the chain.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Chain(['validators' => [
    new Zoop\Mystique\NotRequired,
    new Zoop\Mystique\Alpha
]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/NotRequired', 'mystique/Alpha', 'mystique/Chain'], function(NotRequired, Alpha, Chain){
    var validator = new Chain({'validators': [
            new NotRequired,
            new Alpha
        ]}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Chain({'validators': [
        new mystique.NotRequired,
        new mystique.Alpha
    ]}),
    result = validator.isValid(myValue);
})
";

include __DIR__ . '/template.php';