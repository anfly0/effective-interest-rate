<?php

namespace Nyholm\EffectiveInterest\Test;

use Nyholm\EffectiveInterest\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorSpecifiedPaymentsTest extends TestCase
{

    public function testReadmeExample()
    {

        $principal = 100000;
        $payment = 2400;
        $guess = 0.03;
        $startDate = '2017-04-30';
        $calculator = new Calculator();

        $payments = [
            '2017-04-30' => $payment + 400,
            '2017-05-31' => $payment,
            '2017-06-30' => $payment,
            '2017-07-31' => $payment,
            '2017-08-31' => $payment,
            '2017-09-30' => $payment,
            '2017-10-31' => $payment,
            '2017-11-30' => $payment,
            '2017-12-31' => $payment,
            '2018-01-31' => $payment,
            '2018-02-28' => $payment,
            '2018-03-31' => $payment,
            '2018-04-30' => $payment,
            '2018-05-31' => $payment,
            '2018-06-30' => $payment,
            '2018-07-31' => $payment,
            '2018-08-31' => $payment,
            '2018-09-30' => $payment,
            '2018-10-31' => $payment,
            '2018-11-30' => $payment,
            '2018-12-31' => $payment,
            '2019-01-31' => $payment,
            '2019-02-28' => $payment,
            '2019-03-31' => $payment,
            '2019-04-30' => $payment,
            '2019-05-31' => $payment,
            '2019-06-30' => $payment,
            '2019-07-31' => $payment,
            '2019-08-31' => $payment,
            '2019-09-30' => $payment,
            '2019-10-31' => $payment,
            '2019-11-30' => $payment,
            '2019-12-31' => $payment,
            '2020-01-31' => $payment,
            '2020-02-28' => $payment,
            '2020-03-31' => 31200,
        ];

        $interest = $calculator->withSpecifiedPayments($principal, $startDate, $payments, $guess);
        $this->assertEquals(0.084870, $interest, 'Failed to calculate effective interest with specified payments.', 0.0001);
    }

    /**
     * @dataProvider generator
     */
    public function testWithSpecifiedPayments(float $correctValue, int $principal, string $startDate, array $payments, float $guess)
    {
        $calculator = new Calculator();
        $interest = $calculator->withSpecifiedPayments($principal, $startDate, $payments, $guess);
        $this->assertEquals($correctValue, $interest, 'Failed to calculate effective interest with specified payments.', 0.0001);
    }

    public function generator()
    {
        return [
            [0.0233, 336000, '2017-01-30', $this->payments0(), 0.02],
            [0.0805, 171920, '2017-01-30', $this->payments1(), 0.07],
            [0.1045, 52800, '2017-01-30', $this->payments2(), 0.09],
            [0.0549, 115000, '2017-01-30', $this->payments3(), 0.04],
        ];
    }

    /**
     *
     * @return array
     */
    private function payments0(): array
    {
        return [
            '17-02-28' => 4607,
            '17-03-31' => 4012,
            '17-04-30' => 4012,
            '17-05-31' => 4012,
            '17-06-30' => 4012,
            '17-07-31' => 4012,
            '17-08-31' => 4012,
            '17-09-30' => 4012,
            '17-10-31' => 4012,
            '17-11-30' => 4012,
            '17-12-31' => 4012,
            '18-01-31' => 4012,
            '18-02-28' => 4012,
            '18-03-31' => 4012,
            '18-04-30' => 4012,
            '18-05-31' => 4012,
            '18-06-30' => 4012,
            '18-07-31' => 4012,
            '18-08-31' => 4012,
            '18-09-30' => 4012,
            '18-10-31' => 4012,
            '18-11-30' => 4012,
            '18-12-31' => 4012,
            '19-01-31' => 4012,
            '19-02-28' => 4012,
            '19-03-31' => 4012,
            '19-04-30' => 4012,
            '19-05-31' => 4012,
            '19-06-30' => 4012,
            '19-07-31' => 4012,
            '19-08-31' => 4012,
            '19-09-30' => 4012,
            '19-10-31' => 4012,
            '19-11-30' => 4012,
            '19-12-31' => 4012,
            '20-01-31' => 214012,
        ];
    }/**
     *
     * @return array
     */
    private function payments1(): array
    {
        return [
            '17-02-28' => 4050,
            '17-03-31' => 3455,
            '17-04-30' => 3455,
            '17-05-31' => 3455,
            '17-06-30' => 3455,
            '17-07-31' => 3455,
            '17-08-31' => 3455,
            '17-09-30' => 3455,
            '17-10-31' => 3455,
            '17-11-30' => 3455,
            '17-12-31' => 3455,
            '18-01-31' => 3455,
            '18-02-28' => 3455,
            '18-03-31' => 3455,
            '18-04-30' => 3455,
            '18-05-31' => 3455,
            '18-06-30' => 3455,
            '18-07-31' => 3455,
            '18-08-31' => 3455,
            '18-09-30' => 3455,
            '18-10-31' => 3455,
            '18-11-30' => 3455,
            '18-12-31' => 3455,
            '19-01-31' => 3455,
            '19-02-28' => 3455,
            '19-03-31' => 3455,
            '19-04-30' => 3455,
            '19-05-31' => 3455,
            '19-06-30' => 3455,
            '19-07-31' => 3455,
            '19-08-31' => 3455,
            '19-09-30' => 3455,
            '19-10-31' => 3455,
            '19-11-30' => 3455,
            '19-12-31' => 3455,
            '20-01-31' => 3455,
            '20-02-29' => 3455,
            '20-03-31' => 3455,
            '20-04-30' => 3455,
            '20-05-31' => 3455,
            '20-06-30' => 3455,
            '20-07-31' => 3455,
            '20-08-31' => 3455,
            '20-09-30' => 3455,
            '20-10-31' => 3455,
            '20-11-30' => 3455,
            '20-12-31' => 3455,
            '21-01-31' => 3455,
            '21-02-28' => 3455,
            '21-03-31' => 3455,
            '21-04-30' => 3455,
            '21-05-31' => 3455,
            '21-06-30' => 3455,
            '21-07-31' => 3455,
            '21-08-31' => 3455,
            '21-09-30' => 3455,
            '21-10-31' => 3455,
            '21-11-30' => 3455,
            '21-12-31' => 3455,
            '22-01-31' => 3455,
        ];
    }/**
     *
     * @return array
     */
    private function payments2(): array
    {
        return [
            '17-02-28' => 2279,
            '17-03-31' => 1684,
            '17-04-30' => 1684,
            '17-05-31' => 1684,
            '17-06-30' => 1684,
            '17-07-31' => 1684,
            '17-08-31' => 1684,
            '17-09-30' => 1684,
            '17-10-31' => 1684,
            '17-11-30' => 1684,
            '17-12-31' => 1684,
            '18-01-31' => 1684,
            '18-02-28' => 1684,
            '18-03-31' => 1684,
            '18-04-30' => 1684,
            '18-05-31' => 1684,
            '18-06-30' => 1684,
            '18-07-31' => 1684,
            '18-08-31' => 1684,
            '18-09-30' => 1684,
            '18-10-31' => 1684,
            '18-11-30' => 1684,
            '18-12-31' => 1684,
            '19-01-31' => 1684,
            '19-02-28' => 1684,
            '19-03-31' => 1684,
            '19-04-30' => 1684,
            '19-05-31' => 1684,
            '19-06-30' => 1684,
            '19-07-31' => 1684,
            '19-08-31' => 1684,
            '19-09-30' => 1684,
            '19-10-31' => 1684,
            '19-11-30' => 1684,
            '19-12-31' => 1684,
            '20-01-31' => 1684,
        ];
    }/**
     *
     * @return array
     */
    private function payments3(): array
    {
        return [
            '17-02-28' => 2457,
            '17-03-31' => 1862,
            '17-04-30' => 1862,
            '17-05-31' => 1862,
            '17-06-30' => 1862,
            '17-07-31' => 1862,
            '17-08-31' => 1862,
            '17-09-30' => 1862,
            '17-10-31' => 1862,
            '17-11-30' => 1862,
            '17-12-31' => 1862,
            '18-01-31' => 1862,
            '18-02-28' => 1862,
            '18-03-31' => 1862,
            '18-04-30' => 1862,
            '18-05-31' => 1862,
            '18-06-30' => 1862,
            '18-07-31' => 1862,
            '18-08-31' => 1862,
            '18-09-30' => 1862,
            '18-10-31' => 1862,
            '18-11-30' => 1862,
            '18-12-31' => 1862,
            '19-01-31' => 1862,
            '19-02-28' => 1862,
            '19-03-31' => 1862,
            '19-04-30' => 1862,
            '19-05-31' => 1862,
            '19-06-30' => 1862,
            '19-07-31' => 1862,
            '19-08-31' => 1862,
            '19-09-30' => 1862,
            '19-10-31' => 1862,
            '19-11-30' => 1862,
            '19-12-31' => 1862,
            '20-01-31' => 1862,
            '20-02-29' => 1862,
            '20-03-31' => 1862,
            '20-04-30' => 1862,
            '20-05-31' => 1862,
            '20-06-30' => 1862,
            '20-07-31' => 1862,
            '20-08-31' => 1862,
            '20-09-30' => 1862,
            '20-10-31' => 1862,
            '20-11-30' => 1862,
            '20-12-31' => 1862,
            '21-01-31' => 1862,
            '21-02-28' => 1862,
            '21-03-31' => 1862,
            '21-04-30' => 1862,
            '21-05-31' => 1862,
            '21-06-30' => 1862,
            '21-07-31' => 1862,
            '21-08-31' => 1862,
            '21-09-30' => 1862,
            '21-10-31' => 1862,
            '21-11-30' => 1862,
            '21-12-31' => 1862,
            '22-01-31' => 1862,
            '22-02-28' => 1862,
            '22-03-31' => 1862,
            '22-04-30' => 1862,
            '22-05-31' => 1862,
            '22-06-30' => 1862,
            '22-07-31' => 1862,
            '22-08-31' => 1862,
            '22-09-30' => 1862,
            '22-10-31' => 1862,
            '22-11-30' => 1862,
            '22-12-31' => 1862,
            '23-01-31' => 1862,
        ];
    }
}
