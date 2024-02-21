<?php
namespace Components;

use Traits\SampleTrait;

class SampleComponent4 implements SampleInterface
{
    use SampleTrait;

    public function getName(): string
    {
        return 'SampleComponent4';
    }
}