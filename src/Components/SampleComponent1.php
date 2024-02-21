<?php
namespace Components;

class SampleComponent1 implements SampleInterface
{
    public function getName(): string
    {
        return 'SampleComponent1';
    }
}