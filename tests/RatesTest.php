<?php
/**
 * Test cases for the Tax Rates class
 * Not too much to test here but we can test structure/existence
 *
 * @package Taxes
 * @subpackage Tests
 * @author Salerno Labs LLC
 */
namespace Taxes\Tests;

class RatesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test federal brackets
     */
    public function testFederalBrackets()
    {
        // Ensure both types exist
        $this->assertNotEmpty(\Taxes\Rates::$federal['individual']);
        $this->assertNotEmpty(\Taxes\Rates::$federal['joint']);

        // Ensure both types have the same amount of brackets
        $this->assertEquals(
            count(\Taxes\Rates::$federal['individual']),
            count(\Taxes\Rates::$federal['joint'])
        );

        // Test individual brackets
        $lastBracket = null;
        foreach (\Taxes\Rates::$federal['individual'] as $bracketStart => $taxRate)
        {
            // There are no empty tax brackets
            $this->assertNotEmpty($taxRate);

            // This ensures our brackets go upwards in value
            if ($lastBracket !== null) {
                $this->assertGreaterThan($lastBracket, $bracketStart);
            }

            $lastBracket = $bracketStart;
        }

        // Test married filing jointly
        $lastBracket = null;
        foreach (\Taxes\Rates::$federal['joint'] as $bracketStart => $taxRate)
        {
            // There are no empty tax brackets
            $this->assertNotEmpty($taxRate);

            // This ensures our brackets go upwards in value
            if ($lastBracket !== null) {
                $this->assertGreaterThan($lastBracket, $bracketStart);
            }

            $lastBracket = $bracketStart;
        }
    }

    /**
     * Do some basic testing around state tax rates
     */
    public function testStates()
    {
        foreach (\Taxes\Rates::$state as $stateInfo)
        {
            $this->assertNotEmpty($stateInfo['state']);
            $this->assertEquals(2, strlen($stateInfo['abbreviation']));
            $this->assertTrue($stateInfo['stateTaxRate'] >= 0 && $stateInfo['stateTaxRate'] < 1.0);

            if (!is_null($stateInfo['locality']))
            {
                $this->assertNotEmpty($stateInfo['locality']);
                $this->assertNotNull($stateInfo['localityTaxRate']);
            }
        }
    }
}