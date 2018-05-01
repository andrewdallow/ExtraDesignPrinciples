<?php

/**
 * Abstract class representing a duck
 */
abstract class Duck
{
    /** @var FlyBehavior */
    private $_flyBehavior;

    abstract public function display(): string;

    public function swim()
    {
        return 'The duck swims';
    }

    public function setFlyBehavior(FlyBehavior $behavior): void
    {
        $this->_flyBehavior = $behavior;
    }

    public function performFly(): void
    {
        $this->_flyBehavior->fly();
    }
}

/**
 * Interface FlyBehavior representing all types of flying
 */
interface FlyBehavior
{
    public function fly(): string;
}

class FlyWithNoWings implements FlyBehavior
{

    public function fly(): string
    {
        return 'I am Flying';
    }
}

class FlyNoWings implements FlyBehavior
{

    public function fly(): string
    {
        return 'I cannot fly';
    }
}

/**
 * A real duck that can fly.
 */
class MallardDuck extends Duck
{
    public function display(): string
    {
        return 'Looks like a Mallard Duck';
    }
}

/**
 * A Rubber duck that cannot fly
 */
class RubberDuck extends Duck
{
    public function display(): string
    {
        return 'Looks like a Rubber Duck';
    }
}