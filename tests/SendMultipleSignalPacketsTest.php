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

        $outline = array(
            array(1, '0,0,0', '0,0,0'),
            array(1, '0,0,1', '1,1,0'),
            array(1, '0,1,0', '1,0,1'),
            array(1, '1,0,0', '0,1,1'),
            array(1, '0,1,1', '0,1,1'),
            array(1, '1,0,1', '1,0,1'),
            array(1, '1,1,0', '1,1,0'),
            array(1, '1,1,1', '0,0,0'),
            array(1, '1,0,1,1', '1,0,1,0'),
            array(1, '1,0,1,0', '0,0,0,0'),
            array(2, '1,0,1,1', '0,0,0,0')
        );

        $fileRepository = new InMemoryParameterRepository();
        $outline = $fileRepository->getFileContents();

        $sendMultipleSignalPackets = new SendMultipleSignalPackets();

        foreach ($outline as $example) {

            $this->assertEquals(
                $example[2],
                $sendMultipleSignalPackets($example[1], $example[0])
            );
        }
    }

}
