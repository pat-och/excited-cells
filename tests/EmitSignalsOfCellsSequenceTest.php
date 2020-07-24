<?php declare(strict_types=1);

namespace App\Tests;

use App\UseCase\EmitCellsSignals;
use PHPUnit\Framework\TestCase;

class EmitSignalsOfCellsSequenceTest extends TestCase
{

    /**
     * @test
     * 0 0 0 -> 0 0 0
     */
    public function OOOSequenceTransmissionShouldResultOnOOOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,0,0',
            $EmitCellsSignals('0,0,0')
        );
    }

    /**
     * @test
     * 0 0 1 -> 1 1 0
     */
    public function OOISequenceTransmissionShouldResultOnIIOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,1,0',
            $EmitCellsSignals('0,0,1')
        );
    }

    /**
     * @test
     * 0 1 0 -> 1 0 1
     */
    public function OIOSequenceTransmissionShouldResultOnIOISequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,0,1',
            $EmitCellsSignals('0,1,0')
        );
    }

    /**
     * @test
     * 1 0 0 -> 0 1 1
     */
    public function IOOSequenceTransmissionShouldResultOnOIISequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,1,1',
            $EmitCellsSignals('1,0,0')
        );
    }

    /**
     * @test
     * 0 1 1 -> 0 1 1
     */
    public function OIISequenceTransmissionShouldResultOnOIISequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,1,1',
            $EmitCellsSignals('0,1,1')
        );
    }

    /**
     * @test
     * 1 0 1 -> 1 0 1
     */
    public function IOISequenceTransmissionShouldResultOnIOISequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,0,1',
            $EmitCellsSignals('1,0,1')
        );
    }

    /**
     * @test
     * 1 1 0 -> 1 1 0
     */
    public function IIOSequenceTransmissionShouldResultOnIIOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,1,0',
            $EmitCellsSignals('1,1,0')
        );
    }

    /**
     * @test
     * 1 1 1 -> 0 0 0
     */
    public function IIISequenceTransmissionShouldResultOnOOOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,0,0',
            $EmitCellsSignals('1,1,1')
        );
    }

    /**
     * @test
     * 1 0 1 1 -> 1 0 1 0
     */
    public function IOIISequenceTransmissionShouldResultOnIOIOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '1,0,1,0',
            $EmitCellsSignals('1,0,1,1')
        );
    }


    /**
     * @test
     * 1 0 1 0  -> 0 0 0 0
     */
    public function IOIOSequenceTransmissionShouldResultOnOOOOSequence()
    {
        $EmitCellsSignals = new EmitCellsSignals();

        $this->assertEquals(
            '0,0,0,0',
            $EmitCellsSignals('1,0,1,0')
        );
    }



}
