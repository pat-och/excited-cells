<?php


namespace App\Tests;


use App\SecondaryPort\ParameterRepositoryInterface;

class InMemoryParameterRepository implements ParameterRepositoryInterface
{

    private array $parameters;

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function addParameter(int $steps, string $sequence): void
    {
        $this->parameters[] = array($steps, $sequence);
    }
}