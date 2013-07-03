<?php

$view = new \StdClass;
$view->sectionId = 'chain';
$view->sectionHeading = 'Chain';

$view->description = '<p>Allows validators to be chained together.</p>';

$option = new \StdClass;
$option->name = 'validators';
$option->type = 'array';
$option->default = '[]';
$option->description = 'An array of validator instances that will be evaluated in order. If all pass, then the Result value will be true. If one or more fail, then the Result value will be false. The order of evaluation can be truncated or altered with the <code>haltOnPass</code> <code>haltOnFail</code> <code>skipOnPass</code> <code>skipOnFail</code> properties of each validator. For more information see the <a href="./spec.html">spec</a>.';
$view->options = [
    $option
];

ob_start();
?>
$validator = new Zoop\Mystique\Chain(['validators' => [
    new Zoop\Mystique\Alpha,
    new Zoop\Mystique\Length('min' => 5, 'max' => 10)
]]);
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Alpha', 'mystique/Length', 'mystique/Chain'], function(Alpha, Length, Chain){
    var validator = new Chain({'validators': [
            new Alpha,
            new Length({'min': 5, 'max': 10})
        ]}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Chain({'validators': [
        new mystique.Alpha,
        new mystique.Length({'min': 5, 'max': 10})
    ]}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';