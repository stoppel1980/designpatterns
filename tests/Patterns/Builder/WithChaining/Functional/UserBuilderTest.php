<?php

namespace App\Tests\Patterns\Builder\WithChaining\Functional;

use App\Patterns\Builder\WithChaining\InvalidStateException;
use App\Patterns\Builder\WithChaining\UserBuilder;
use PHPUnit\Framework\TestCase;

class UserBuilderTest extends TestCase
{
    /** @test */
    public function aUserCanBeBuild(): void
    {
        $userBuilder = new UserBuilder();
        $user = $userBuilder->username('douwe')
                            ->password('verysecret')->build();

        $this->assertSame('douwe', $user->getUsername());
        $this->assertSame('verysecret', $user->getPassword());
    }

    /** @test */
    public function itThrownsAnExceptionIfNotAllRequiredFieldsAreSet()
    {
        $this->expectException(InvalidStateException::class);

        $userBuilder = new UserBuilder();
        $userBuilder->password('verysecret')->build();
    }
}