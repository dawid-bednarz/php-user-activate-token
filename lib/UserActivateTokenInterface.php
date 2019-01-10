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

interface UserActivateTokenInterface
{
    public function getId(): ?int;

    public function setId(int $id) : UserActivateTokenInterface;

    public function getToken() : ?TokenInterface;

    public function setToken(TokenInterface $token): UserActivateTokenInterface;

    public function getUser(): ?UserInterface;

    public function setUser(UserInterface $user): UserActivateTokenInterface;

    public function setContext(ContextInterface $context);

    public function getContext() : ?ContextInterface;
}