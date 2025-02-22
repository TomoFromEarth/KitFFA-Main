<?php

namespace Util\item;

use pocketmine\crafting\CraftingManager;
use pocketmine\item\ItemFactory;
use Util\Base;

class CraftManager
{
    public static function startup(): void
    {
        $craftMgr = Base::getInstance()->getServer()->getCraftingManager();
        // PM5 provides a cleaner way to handle recipes
        $craftMgr->cleanRecipes();
    }
}
