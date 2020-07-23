<?php declare(strict_types=1);

namespace App\Tests;

use App\UseCase\EmitCellsSignals;
use PHPUnit\Framework\TestCase;

class EmitSignalsOfCellsSequenceTest extends TestCase
{

    public function testOOOSequenceTransmissionShouldResultOnOOOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,0,0',
            $EmitCellsSignals('0,0,0')
        );
    }

}
