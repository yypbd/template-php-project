<?php
require_once '../src/autoload.php';

use Components\SampleComponent1;
use Components\SampleComponent2;
use Components\SampleComponent3A;
use Components\SampleComponent3B;
use Components\SampleComponent4;
use Generators\SampleGenerator;
use Closures\SampleClosure;

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


print('<h1>Generators</h1>');
$generator = new SampleGenerator();
foreach ($generator->getValue() as $value)
{
    print($value);
    print('<br>');
}

foreach ($generator->getRange() as $range)
{
    print($range);
    print('<br>');
}


print('<h1>Closures</h1>');
$closure = new SampleClosure();
print($closure->doTest1());
print('<br>');
print_r($closure->doTest2());
print('<br>');

