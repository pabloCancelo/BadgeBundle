<?php
/**
 * This file is part of the AntewesBadgeBundle package.
 *
 * (c) antweb <http://github.com/antwebes/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Ant\BadgeBundle\ModelManager;

use Ant\BadgeBundle\Model\GroupInterface;

abstract class GroupManager implements GroupManagerInterface
{
 
    public function createGroup()
    {
        $class = $this->getClass();
        $group = new $class;

        return $group;
    }
}