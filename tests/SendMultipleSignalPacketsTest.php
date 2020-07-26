<?php declare(strict_types=1);

namespace App\Tests;

use App\SecondaryPort\ParameterRepositoryInterface;
use App\UseCase\SendMultipleSignalPackets;
use PHPUnit\Framework\TestCase;

class SendMultipleSignalPacketsTest extends TestCase
{

    /**
     * @test
     */
    public function SendMultipleSignalPacketsShouldReturnExpectedSequence()
    {

        $parameterRepository = new InMemoryParameterRepository();
        $this->givenSomeParameters($parameterRepository);

        $parameters = $parameterRepository->getParameters();

        $sendMultipleSignalPackets = new SendMultipleSignalPackets();

        $expected = $this->getExpectedValues();

        foreach ($parameters as $key => $parameter) {

            $this->assertEquals(
                $expected[$key],
                $sendMultipleSignalPackets($parameter[1], $parameter[0])
            );
        }
    }

    private function givenSomeParameters(ParameterRepositoryInterface $parameterRepository): void
    {
        $inputs = array(
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
            array(2, '1,0,1,1'),
            array(1, '1,0,1,1,0,1,0,1,1,1'),
            array(1, '1,0,1,1,0,0,0,1,0,0'),
            array(1, '0,0,1,1,1,0,1,0,1,1'),
            array(3, '1,0,1,1,0,1,0,1,1,1'),
        );

        foreach ($inputs as $input) {
            $parameterRepository->addParameter($input[0], $input[1]);
        }

    }

    private function getExpectedValues(): array
    {
        return array(
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
            '0,0,0,0',
            '1,0,1,1,0,0,0,1,0,0',
            '0,0,1,1,1,0,1,0,1,1',
            '1,1,1,0,1,0,0,0,1,1',
            '1,1,1,0,1,0,0,0,1,1',
        );
    }

}
