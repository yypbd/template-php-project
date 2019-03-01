<?php
require_once __DIR__ . '\src\autoload.php';

use Components\SampleComponent1;
use Components\SampleComponent2;
use Components\SampleComponent3A;
use Components\SampleComponent3B;

print('<h1>Components</h1>');
$component = new SampleComponent1();
print($component->getName());
print('<br>');
$component = new SampleComponent2();
print($component->getName());
print('<br>');
$component = new SampleComponent3A(10);
print($component->toString());
print('<br>');
$component = new SampleComponent3B(20);
print($component->toString());

?>