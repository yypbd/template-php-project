<?php
namespace Components;

use Components\SampleInterface;

class SampleComponent1 implements SampleInterface
{
    public function getName()
    {
        return 'SampleComponent1';
    }
}
?>