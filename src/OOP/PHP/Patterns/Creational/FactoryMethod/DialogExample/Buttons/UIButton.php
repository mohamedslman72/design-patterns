<?php

namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class UIButton extends Button
{

    public function show(): string
    {
        return '<UIButton props="{UI Button}"></UIButton>';
    }

    public function click(): void
    {
        // a punch of commands will be executed
    }
}