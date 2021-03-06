<?php

namespace Structural\Decorator\Example2;

/**
 * WiFi（装饰类）
 *
 * @package Structural\Decorator\Example2
 */
class WiFi extends BookingDecorator
{
    const PRICE = 2;
    
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }
    
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}
