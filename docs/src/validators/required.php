<?php

$view = new \StdClass;
$view->sectionId = 'required';
$view->sectionHeading = 'Required';

$view->description = '<p>Place this validator at the start of a chain. If the test value is nullish, it will immediately return false without evaluating subsiquent validators in the chain.</p>';

ob_start();
?>
$validator = new Zoop\Mystique\Chain(['validators' => [
    new Zoop\Mystique\Required,
    new Zoop\Mystique\Alpha
]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Required', 'mystique/Alpha', 'mystique/Chain'], function(Required, Alpha, Chain){
    var validator = new Chain({'validators': [
            new Required,
            new Alpha
        ]}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Chain({'validators': [
        new mystique.Required,
        new mystique.Alpha
    ]}),
    result = validator.isValid(myValue);
})
";

include __DIR__ . '/template.php';