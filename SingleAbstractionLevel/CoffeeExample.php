<?php

/**
 * Coffee class showing an example of single layer of abstraction per function.
 */
class Coffee
{

    // Highest Abstraction level.
    public function makeCoffee()
    {
        $this->grindBeans();
        $this->boilWater();
        $this->pourWater();
    }

    // Intermediate abstraction level
    private function grindBeans()
    {
        $this->placeBeansInGrinder();
        $this->turnGrinderOn();
        $this->beansGround();
        $this->turnGrinderOff();
    }

    private function boilWater()
    {
        //... boil water methods
    }

    private function pourWater()
    {
        //... pour water methods
    }


    // Lowest abstraction level
    private function placeBeansInGrinder()
    {
        echo 'beans placed in Grinder';
    }

    private function turnGrinderOn()
    {
        echo 'Grinder is running';
    }

    private function beansGround()
    {
        echo 'Beans have been ground';
    }

    private function turnGrinderOff()
    {
        echo 'Grinder has stopped';
    }

}


