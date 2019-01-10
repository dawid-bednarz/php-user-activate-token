<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken\Model\Criteria;

use DawBed\PHPContext\ContextInterface;
use DawBed\PHPToken\TokenInterface;

class ConfirmCriteria
{
    private $token;
    private $status;

    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    public function setToken(TokenInterface $token): ConfirmCriteria
    {
        $this->token = $token;
        return $this;
    }

    public function getStatus(): ContextInterface
    {
        return $this->Context;
    }

    public function setStatus(ContextInterface $status): ConfirmCriteria
    {
        $this->Context = $status;
        return $this;
    }
}