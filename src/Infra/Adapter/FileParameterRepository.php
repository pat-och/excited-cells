<?php


namespace App\Infra\Adapter;


use App\SecondaryPort\ParameterRepositoryInterface;

class FileParameterRepository implements ParameterRepositoryInterface
{

    private array $parameters;

    public function getParameters(): array
    {
        $content = file_get_contents('..\public\parameters\test.txt');

        if (!$content) {
            return $this->parameters;
        }

        $lines = explode('\r\n', $content);
        foreach ($lines as $line) {
            if ($line === '')
                break;

            $items = explode(';', $line);
            $this->parameters[] = array($items[0], $items[1]);
        }

        return $this->parameters;

    }

    public function addParameter(int $steps, string $sequence): void
    {
        // TODO: Implement addParameter() method.$content
    }
}