<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken\Model;

use DawBed\PHPToken\TokenInterface;
use DawBed\PHPUser\UserInterface;
use DawBed\PHPUserActivateToken\UserActivateTokenInterface;

class CreateModel
{
    private $entity;
    private $token;
    private $user;

    function __construct(UserActivateTokenInterface $userActivateToken, UserInterface $user, TokenInterface $token)
    {
        $this->entity = $userActivateToken;
        $this->token = $token;
        $this->user = $user;
    }

    public function getEntity(): UserActivateTokenInterface
    {
        return $this->entity;
    }

    public function make(): void
    {
        $this->entity
            ->setToken($this->token)
            ->setUser($this->user);
    }
}