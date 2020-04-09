<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        $this->user = new User('test@test.fr', 'Test', 'Test', 29);
    }

    public function tearDown(): void
    {
        unset($this->user);
    }

    public function testIsValid()
    {
        $isValid = $this->user->isValid();
        $this->assertSame(true, $isValid);
    }

    public function testIsNotValid()
    {
        $isValid = $this->user->isValid();
        $this->assertFalse(false, $isValid);
    }
}
