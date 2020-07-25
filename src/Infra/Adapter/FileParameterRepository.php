<?php


namespace App\Infra\Adapter;


use App\SecondaryPort\ParameterRepositoryInterface;

class FileParameterRepository implements ParameterRepositoryInterface
{

    public function getParameters(): array
    {
        // TODO: Implement getParameters() method.
    }

    public function addParameter(int $steps, string $sequence): void
    {
        // TODO: Implement addParameter() method.
    }
}