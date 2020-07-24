<?php


namespace App\UseCase;


use phpDocumentor\Reflection\Types\Integer;

class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {

        $initialCells = explode(',', $sequence);

        $finalCells = $this->initFinalCells(count($initialCells));

        foreach ($initialCells as $key => $value) {

            $previousCell = $initialCells[count($initialCells) - 1];
            if (array_key_exists($key - 1, $initialCells)) {
                $previousCell = $initialCells[$key - 1];
            }

            $nextCell = $initialCells[0];
            if (array_key_exists($key + 1, $initialCells)) {
                $nextCell = $initialCells[$key + 1];
            }

            if ($nextCell === $previousCell) {
                $finalCells[$key] = 0;
            }
        }

        return implode(',', $finalCells);
    }

    private function initFinalCells(int $count): array
    {
        $i = 0;
        while ($i < $count) {
            $finalCells[] = 1;
            $i++;
        }

        return $finalCells;
    }
}