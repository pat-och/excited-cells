<?php


namespace App\UseCase;


class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {

        $initialCells = explode(',', $sequence);

        $finalCells = array(1,1,1);

        foreach ($initialCells as $key => $value) {

            if ($key === 0) {
                $previous = $initialCells[2];
                $next = $initialCells[1];
            }

            if ($key === 1) {
                $previous = $initialCells[0];
                $next = $initialCells[2];
            }

            if ($key === 2) {
                $previous = $initialCells[1];
                $next = $initialCells[0];
            }

            if ($next === $previous) {
                $finalCells[$key] = 0;
            }
        }

        return implode(',', $finalCells);
    }
}