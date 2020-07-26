<?php


namespace App\SecondaryPort;


interface ParameterRepositoryInterface
{
    public function getParameters(): array;
    public function addParameter(int $steps, string $sequence): void;
}