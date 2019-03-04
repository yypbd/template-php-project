<?php
namespace Components;

use Components\SampleInterface;

class SampleComponent2 implements SampleInterface
{
    public function getName()
    {
        return 'SampleComponent2';
    }
}
?>