<?php
require_once __DIR__ . '\src\autoload.php';

use Components\SampleComponent1;
use Components\SampleComponent2;

print('<h1>Components</h1>');
$component = new SampleComponent1();
print($component->getName());
print('<br>');
$component = new SampleComponent2();
print($component->getName());

?>