<?php

namespace More\EAV;

/**
 * Value
 *
 * @package More\EAV
 */
class Value
{
    private Attribute $attribute;
    private string $name;
    
    public function __construct(Attribute $attribute, string $name)
    {
        $this->name = $name;
        $this->attribute = $attribute;
        
        $attribute->addValue($this);
    }
    
    public function __toString(): string
    {
        return sprintf('%s: %s', (string)$this->attribute, $this->name);
    }
}
