<?php declare(strict_types=1);

namespace App\Tests;

use App\UseCase\SendMultipleSignalPackets;
use PHPUnit\Framework\TestCase;

class SendMultipleSignalPacketsTest extends TestCase
{

    /**
     * @test
     */
    public function IOIIintoOOOOwith2steps()
    {

        $sendMultipleSignalPackets = new SendMultipleSignalPackets();

        $this->assertEquals(
            '0,0,0,0',
            $sendMultipleSignalPackets('1,0,1,1', 2)
        );
    }

}
