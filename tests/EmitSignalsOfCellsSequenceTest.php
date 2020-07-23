<?php declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class EmitSignalsOfCellsSequenceTest extends TestCase
{

    public function testIOIISequenceTransmissionShouldResultOnIOIOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,0,1,0',
            $EmitCellsSignals('1,0,1,1')
        );
    }

}
