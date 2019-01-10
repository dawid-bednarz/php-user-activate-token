<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken;

use DawBed\PHPContext\ContextInterface;
use DawBed\PHPToken\TokenInterface;
use DawBed\PHPUser\UserInterface;

class UserActivateToken implements UserActivateTokenInterface
{
    protected $id;
    protected $token;
    protected $user;
    protected $context;

    function __construct(ContextInterface $context)
    {
        $this->context = $context;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): UserActivateTokenInterface
    {
        $this->id = $id;

        return $this;
    }

    public function getToken(): ?TokenInterface
    {
        return $this->token;
    }

    public function setToken(TokenInterface $token): UserActivateTokenInterface
    {
        $this->token = $token;
        return $this;
    }

    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): UserActivateTokenInterface
    {
        $this->user = $user;
        return $this;
    }

    public function getContext(): ?ContextInterface
    {
        return $this->context;
    }

    public function setContext(ContextInterface $context): UserActivateTokenInterface
    {
        $this->context = $context;

        return $this;
    }
}