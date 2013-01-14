<?php
/**
 * This file is part of the AntewesBadgeBundle package.
 *
 * (c) antweb <http://github.com/antwebes/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ant\BadgeBundle\ModelManager;
use ant\BadgeBundle\Model\BadgeInterface;

class BadgeManager implements BadgeManagerInterface {

	protected function createBadge() {
		$class = $this->getClass();
		$badge = new $class;

		return $badge;
	}
	public function saveBadge(BadgeInterface $badge) {
		// TODO: Auto-generated method stub

	}

}
