<?php


namespace App\Tests;


class InMemoryParameterRepository
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