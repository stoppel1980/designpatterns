<?php


namespace App\Patterns\Builder\WithChaining;

class UserBuilder
{
    private string $username = '';
    private string $password = '';
    private string $avatarUrl = '';

    public function __construct()
    {
        return $this;
    }

    public function username(string $username): UserBuilder
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function password(string $password): UserBuilder
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function avatarUrl(string $avatarUrl): UserBuilder
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function build(): User
    {
        if ($this->getUsername() === '') {Throw new InvalidStateException();}

        return new User($this);
    }
}