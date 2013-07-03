<?php

$view = new \StdClass;
$view->sectionId = 'regex';
$view->sectionHeading = 'Regex';

$view->description = '<p>Returns true if the test value matches the supplied regular expression.</p>';

$option = new \StdClass;
$option->name = 'regex';
$option->type = 'string';
$option->default = '$^';
$option->description = 'The regular expression to test against.';
$view->options[] = $option;

ob_start();
?>
$validator = new Zoop\Mystique\Regex;
$result = $validator->isValid(['regex' => '^[a-zA-Z]+$']);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Regex'], function(Regex){
    var validator = new Regex({regex: '^[a-zA-Z]+$'}),
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Regex({regex: '^[a-zA-Z]+$'}),
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';