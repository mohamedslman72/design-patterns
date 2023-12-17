<?php

namespace App\OOP\PHP;

class Microwave
{
private int $temp;
private string $program;
private int $time;

    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function deFreeze() :string
    {
        return "I am de-freezing the food at {$this->temp} using the program {$this->program}";
    }

}