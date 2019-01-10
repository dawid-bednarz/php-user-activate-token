<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken\Model;

use DawBed\PHPContext\ContextInterface;
use DawBed\PHPUser\UserStatusInterface;
use DawBed\PHPUserActivateToken\UserActivateTokenInterface;

class ConfirmModel
{
    private $userActivateToken;
    private $userStatus;

    function __construct(
        UserActivateTokenInterface $userActivateToken,
        UserStatusInterface $userStatus,
        ContextInterface $status
    )
    {
        $this->userActivateToken = $userActivateToken;
        $userStatus->setStatus($status);
        $this->userStatus = $userStatus;
    }

    public function getEntity()
    {
        return $this->userActivateToken;
    }

    function make(): void
    {
        $this->userActivateToken->getUser()
            ->addStatus($this->userStatus);
    }
}