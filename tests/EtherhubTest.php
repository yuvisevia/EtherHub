<?php
/**
 * Tests for EtherHub
 */

use PHPUnit\Framework\TestCase;
use Etherhub\Etherhub;

class EtherhubTest extends TestCase {
    private Etherhub $instance;

    protected function setUp(): void {
        $this->instance = new Etherhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
