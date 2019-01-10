<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken\Model;

use DawBed\PHPToken\DTO\TokenSetting;
use DawBed\PHPToken\TokenInterface;
use DawBed\PHPUser\UserInterface;
use DawBed\PHPUserActivateToken\UserActivateTokenInterface;

class RefreshModel
{
    private $entity;
    private $user;
    private $tokenSetting;

    function __construct(UserActivateTokenInterface $entity, UserInterface $user, TokenSetting $tokenSetting)
    {
        $this->entity = $entity;
        $this->user = $user;
        $this->tokenSetting = $tokenSetting;
    }

    public function getTokenSetting(): TokenSetting
    {
        return $this->tokenSetting;
    }

    public function getEntity(): UserActivateTokenInterface
    {
        return $this->entity;
    }

    public function getToken(): ?TokenInterface
    {
        return $this->entity->getToken();
    }

    public function make(TokenInterface $token): void
    {
        $this->entity
            ->setToken($token)
            ->setUser($this->user);
    }
}