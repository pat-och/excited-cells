<?php


namespace App\UseCase;


class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {

        $initialCells = explode(',', $sequence);

        $newCells = array(1,1,1);

        foreach ($initialCells as $key => $value) {
            if ($key === 0 && ($initialCells[2] === $initialCells[1])) {
                $newCells[$key] = 0;
            }

            if ($key === 1 && ($initialCells[0] === $initialCells[2])) {
                $newCells[$key] = 0;
            }

            if ($key === 2 && ($initialCells[1] === $initialCells[0])) {
                $newCells[$key] = 0;
            }
        }

        return implode(',', $newCells);
    }
}