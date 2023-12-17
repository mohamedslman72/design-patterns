<?php

namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{

    public function show(): string
    {
        return '<div><button>Web Button !</button></div>';
    }

    public function click(): void
    {
        // a punch of commands will be executed
    }
}