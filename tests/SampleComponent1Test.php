<?php

use PHPUnit\Framework\TestCase;
use Components\SampleComponent1;

class SampleComponent1Test extends TestCase
{
    protected $_component;

    protected function setUp(): void
    {
        $this->_component = new SampleComponent1();
    }

    public function testComponentName()
    {
        $this->assertSame($this->_component->getName(), 'SampleComponent1');        
    }
}

?>