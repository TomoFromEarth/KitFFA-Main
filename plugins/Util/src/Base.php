<?php

namespace Util;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use Util\entity\EntityManager;
use Util\item\CraftManager;
use Util\item\ItemManager;
use muqsit\simplepackethandler\SimplePacketHandler;

class Base extends PluginBase
{
    use SingletonTrait;

    public function onLoad(): void
    {
        self::setInstance($this);

        // Initialize SimplePacketHandler
        SimplePacketHandler::createInterceptor($this);

        EntityManager::startup();
        ItemManager::startup();
    }

    public function onEnable(): void
    {
        CraftManager::startup();

        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener(), $this);
    }

    public function canPerformCheck(): bool
    {
        return $this->getServer()->getTicksPerSecondAverage() > 19.0;
    }
}
