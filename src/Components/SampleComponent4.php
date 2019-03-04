<?php
namespace Components;

use Components\SampleInterface;

class SampleComponent4 implements SampleInterface
{
    use \Traits\SampleTrait;

    public function getName()
    {
        return 'SampleComponent4';
    }
}
?>