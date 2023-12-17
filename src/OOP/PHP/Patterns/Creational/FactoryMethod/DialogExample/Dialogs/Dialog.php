<?php

namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function renderDialog()
    {
        $button = $this->createButton();
        return "
       #####################
       {$button->show()}
       #####################
       ";
    }
}