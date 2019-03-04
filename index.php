<?php
require_once __DIR__ . '\src\autoload.php';

use Components\SampleComponent1;
use Components\SampleComponent2;
use Components\SampleComponent3A;
use Components\SampleComponent3B;
use Components\SampleComponent4;

print('<h1>Components</h1>');
print('<h2>Class</h2>');
$component = new SampleComponent1();
print('name: ' . $component->getName());
print('<br>');
$component = new SampleComponent2();
print('name: ' . $component->getName());
print('<br>');
$component = new SampleComponent3A(10);
print($component->toString());
print('<br>');
$component = new SampleComponent3B(20);
print($component->toString());

print('<h2>Trait</h2>');
$component = new SampleComponent4();
print('trait name: ' . $component->getTraitName());

?>