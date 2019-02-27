<?php
/*
 *
 * Run command:
 * # phpunit TerrainLevelingTest
 *
 */

use PHPUnit\Framework\TestCase;

class TerrainLevelingTest extends TestCase
{
    public function testgetMinimum()
    {
        // Test example cases
        $this->assertEquals(2, TerrainLeveling::getMinimum(array("10","31")));
        $this->assertEquals(7, TerrainLeveling::getMinimum(array("54454","61551")));
        $this->assertEquals(0, TerrainLeveling::getMinimum(array("989")));
        $this->assertEquals(8, TerrainLeveling::getMinimum(array("90")));
        $this->assertEquals(53, TerrainLeveling::getMinimum(array("5781252", "2471255", "0000291", "1212489")));
        // Test excepions
        $this->assertEquals(-1, TerrainLeveling::getMinimum("989"));
        $this->assertEquals(-1, TerrainLeveling::getMinimum(array()));
        $this->assertEquals(-1, TerrainLeveling::getMinimum(array("5781252","233")));
        $this->assertEquals(-1, TerrainLeveling::getMinimum(array("578a252","5781252")));
        $this->assertEquals(-1, TerrainLeveling::getMinimum(array("5781252","5781252","","123")));
    }
}