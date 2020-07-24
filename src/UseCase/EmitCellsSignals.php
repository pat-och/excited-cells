<?php


namespace App\UseCase;


class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {

        $initialCells = explode(',', $sequence);

        $finalCells = array(1,1,1);

        foreach ($initialCells as $key => $value) {

            $previousCell = $initialCells[count($initialCells) - 1];
            if (array_key_exists($key - 1, $initialCells)) {
                $previousCell = $initialCells[$key - 1];
            }

            if ($key === 0) {

                $nextCell = $initialCells[$key + 1];
            }

            if ($key === 1) {
                $nextCell = $initialCells[$key + 1];
            }

            if ($key === count($initialCells) - 1) {
                $nextCell = $initialCells[0];
            }

            if ($nextCell === $previousCell) {
                $finalCells[$key] = 0;
            }
        }

        return implode(',', $finalCells);
    }
}