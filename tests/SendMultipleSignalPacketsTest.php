<?php declare(strict_types=1);

namespace App\Tests;

use App\UseCase\SendMultipleSignalPackets;
use PHPUnit\Framework\TestCase;

class SendMultipleSignalPacketsTest extends TestCase
{

    /**
     * @test
     */
    public function SendMultipleSignalPacketsShouldReturnExpectedSequence()
    {

        $expected = array(
            '0,0,0',
            '1,1,0',
            '1,0,1',
            '0,1,1',
            '0,1,1',
            '1,0,1',
            '1,1,0',
            '0,0,0',
            '1,0,1,0',
            '0,0,0,0',
            '0,0,0,0'
        );

        $fileRepository = new InMemoryParameterRepository();
        $outline = $fileRepository->getParameters();

        $sendMultipleSignalPackets = new SendMultipleSignalPackets();

        foreach ($outline as $key => $parameter) {

            $this->assertEquals(
                $expected[$key],
                $sendMultipleSignalPackets($parameter[1], $parameter[0])
            );
        }
    }

}
