<?php

$view = new \StdClass;
$view->sectionId = 'slug';
$view->sectionHeading = 'Slug';

$view->description = '<p>Returns true if the test value is a valid slug, that is, contains only the characters a-z, 0-9 and -, and meets the specified length conditions.</p>';

$option = new \StdClass;
$option->name = 'min';
$option->type = 'int';
$option->default = '3';
$option->description = 'The minimum length of the slug.';
$view->options[] = $option;

$option = new \StdClass;
$option->name = 'max';
$option->type = 'int';
$option->default = '255';
$option->description = 'The maximum length of the slug.';
$view->options[] = $option;

ob_start();
?>
$validator = new Zoop\Mystique\Slug;
$result = $validator->isValid($myValue);
<?php
$view->phpExample = ob_get_clean();

$view->jsAMDExample = "
require(['mystique/Slug'], function(Slug){
    var validator = new Slug,
        result = validator.isValid(myValue);
})
";

$view->jsStandAloneExample = "
var validator = new mystique.Slug,
    result = validator.isValid(myValue);
";

include __DIR__ . '/template.php';