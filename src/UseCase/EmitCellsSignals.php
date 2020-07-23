<?php


namespace App\UseCase;


class EmitCellsSignals
{

    public function __invoke(string $sequence): string
    {
        return '0,0,0';
    }
}