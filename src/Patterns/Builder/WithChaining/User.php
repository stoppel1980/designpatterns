<?php


namespace App\Patterns\Builder\WithChaining;


class User implements \JsonSerializable
{
    private string $username;
    private string $password;
    private string $avatarUrl;

    public function __construct(UserBuilder $builder)
    {
        $this->username = $builder->getUsername();
        $this->password = $builder->getPassword();
        $this->avatarUrl = $builder->getAvatarUrl();
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function jsonSerialize()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'avatarUrl' => $this->getAvatarUrl()
        ];
    }
}