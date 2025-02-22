<?php

namespace Util\util;

use pocketmine\math\AxisAlignedBB;

class MathUtils
{
    public static function modifyBoundingBox(AxisAlignedBB $bb, int $minX, int $minY, int $minZ, int $maxX, int $maxY, int $maxZ): AxisAlignedBB
    {
        return new AxisAlignedBB(
            $bb->minX + $minX,
            $bb->minY + $minY,
            $bb->minZ + $minZ,
            $bb->maxX + $maxX,
            $bb->maxY + $maxY,
            $bb->maxZ + $maxZ
        );
    }
}
