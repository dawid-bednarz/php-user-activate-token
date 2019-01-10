<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUserActivateToken\Model\Criteria;

use DateInterval;
use DawBed\PHPContext\ContextInterface;
use DawBed\PHPToken\DTO\TokenSetting;
use DawBed\PHPUser\UserInterface;

class CreateCriteria
{
    public const TYPE_TOKEN = 'user-confirm-account';

    private $settings;
    private $user;
    private $context;

    function __construct(DateInterval $expired, UserInterface $user, ContextInterface $context)
    {
        $this->settings = new TokenSetting($expired, self::TYPE_TOKEN);
        $this->user = $user;
        $this->context = $context;
    }

    public function getSettings(): TokenSetting
    {
        return $this->settings;
    }

    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function getContext(): ContextInterface
    {
        return $this->context;
    }
}