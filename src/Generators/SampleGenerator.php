<?php
namespace Generators;

class SampleGenerator
{
    public function getValue()
    {
        yield 'value0';
        yield 'value1';
        yield 'value2';
        yield 'value3';
        yield 'value4';
    }

    public function getRange()
    {
        for($i = 0; $i < 3; $i++)
        {
            yield $i;
        }
    }
}
?>