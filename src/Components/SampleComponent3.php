<?php
namespace Components;

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

    public function toString(): string
    {
        return 'name: ' . $this->getName() . ', value: ' . $this->getValue();
    }
}