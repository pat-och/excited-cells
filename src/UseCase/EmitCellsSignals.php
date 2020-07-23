<?php


namespace App\UseCase;


class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {

        $initialCells = explode(',', $sequence);

        $newCells = array(1,1,1);

        if ($initialCells[2] === $initialCells[1]) {
            $newCells[0] = 0;
        }

        if ($initialCells[0] === $initialCells[2]) {
            $newCells[1] = 0;
        }

        if ($initialCells[1] === $initialCells[0]) {
            $newCells[2] = 0;
        }

        return implode(',', $newCells);
    }
}