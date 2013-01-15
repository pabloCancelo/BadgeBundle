<?php
/**
 * This file is part of the AntewesBadgeBundle package.
 *
 * (c) antweb <http://github.com/antwebes/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ant\BadgeBundle\Model;

use ant\BadgeBundle\Model\ParticipantInterface;

abstract class Rank implements RankInterface {
	
	protected $count;
	
	/**
	 * Participant that created the badge
	 *
	 * @var ParticipantInterface
	 */
	protected $participant;
	/**
	 * boolean true = badge wins
	 *
	 */
	protected $acquired;
	
	/**
	 * Badge contained in this rank
	 *
	 * @var BadgeInterface
	 */
	protected $badge;
	/**
	 * Date when the badge was won
	 *
	 * @var DateTime
	 */
	protected $wonAt;

	public function getcount() {
		return $this->count;
	}
	
	public function setcount($count) {
		$this->count = $count;
	}
	
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::getParticipant()
	 */
	public function getParticipant()
	{
		return $this->createdBy;
	}
	
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::setParticipant()
	 */
	public function setParticipant(ParticipantInterface $participant)
	{
		$this->participant = $participant;
	}
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::getAcquired()
	 */
	public function getAcquired()
	{
		return $this->acquired;
	}
	
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::setAcquired()
	 */
	public function setAcquired($acquired)
	{
		$this->$acquired = $acquired;
	}
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::getBadge()
	 */
	public function getBadge()
	{
		return $this->badge;
	}
	
	/**
	 * @see ant\BadgeBundle\Model\RankInterface::setBadge()
	 */
	public function setBadge(BadgeInterface $badge)
	{
		$this->$badge = $badge;
	}
	/**
	 * @see FOS\MessageBundle\Model\ThreadInterface::getWonAt()
	 */
	public function getWonAt()
	{
		return $this->wonAt;
	}
	
	/**
	 * @see FOS\MessageBundle\Model\ThreadInterface::setWonAt()
	 */
	public function setWonAt(\DateTime $wonAt)
	{
		$this->wonAt = $wonAt;
	}

}
