<?php


namespace App\UseCase;


class SendMultipleSignalPackets
{
    public function __invoke(string $sequence, int $k)
    {
        $emitCellsSignals = new EmitCellsSignals();

        $i = 0;
        while ($i <= $k) {
            $sequence = $emitCellsSignals($sequence);
            $i++;
        }

        return $sequence;
    }
}