<?php
namespace Components;

use Components\SampleInterface;

abstract class SampleComponent3 implements SampleInterface
{
    protected $_value;

    public function __construct($value)
    {
        $this->_value = $value;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function toString()
    {
        return 'name: ' . $this->getName() . ', value: ' . (string)$this->getValue();
    }
}
?>