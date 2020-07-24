<?php


namespace App\Tests;


use App\PrimaryPort\ParameterRepositoryInterface;

class InMemoryParameterRepository implements ParameterRepositoryInterface
{

    public function getParameters()
    {
        return array(
            array(1, '0,0,0'),
            array(1, '0,0,1'),
            array(1, '0,1,0'),
            array(1, '1,0,0'),
            array(1, '0,1,1'),
            array(1, '1,0,1'),
            array(1, '1,1,0'),
            array(1, '1,1,1'),
            array(1, '1,0,1,1'),
            array(1, '1,0,1,0'),
            array(2, '1,0,1,1')
        );
    }
}