<?php declare(strict_types=1);

namespace App\Tests;

use App\UseCase\EmitCellsSignals;
use PHPUnit\Framework\TestCase;

class EmitSignalsOfCellsSequenceTest extends TestCase
{

    /**
     * @test
     *
     */
    public function inputSequenceTransmissionShouldResultOnExpectedSequence()
    {
        $outline = [
            '0,0,0' => '0,0,0',
            '0,0,1' => '1,1,0',
            '0,1,0' => '1,0,1',
            '1,0,0' => '0,1,1',
            '0,1,1' => '0,1,1',
            '1,0,1' => '1,0,1',
            '1,1,0' => '1,1,0',
            '1,1,1' => '0,0,0',
            '1,0,1,1' => '1,0,1,0',
            '1,0,1,0' => '0,0,0,0',
        ];

        foreach ($outline as $input => $expected) {
            $EmitCellsSignals = new EmitCellsSignals();

            $this->assertEquals(
                $expected,
                $EmitCellsSignals($input)
            );
        }
    }
}
