<?php
/**
 * This file is part of the AntewesBadgeBundle package.
 *
 * (c) antweb <http://github.com/antwebes/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ant\BadgeBundle\EntityManager;

use ant\BadgeBundle\ModelManager\RankManager as BaseRankManager;

use Doctrine\ORM\EntityManager;
use ant\BadgeBundle\Model\BadgeInterface;
use Doctrine\ORM\Query\Builder;
use ant\BadgeBundle\Model\ParticipantInterface;

/**
* Default ORM RankManager.
*
* @author Pablo <pablo@antweb.es>
*/
class RankManager extends BaseRankManager
{
    /**
	* @var EntityManager
	*/
    protected $em;

    /**
	* @var DocumentRepository
	*/
    protected $repository;

    /**
	* @var string
	*/
    protected $class;

    /**
	* @var string
	*/
    protected $metaClass;

    /**
	* Constructor.
	*
	* @param EntityManager $em
	* @param string $class
	* @param string $metaClass
	*/
    public function __construct(EntityManager $em, $class, $metaClass)
    {
        $this->em = $em;
        $this->repository = $em->getRepository($class);
        $this->class = $em->getClassMetadata($class)->name;
        $this->metaClass = $em->getClassMetadata($metaClass)->name;
    }

    /**
* Creamos todas las funciones que queramos como el FOsMessageBundle
*/
    /**
     * Gets Rank of a participant 
     * ie the badges that the user is trying to get
     *
     * @param ParticipantInterface $participant
     * @return array of RankInterface
     */
    public function findBadgesOfParticipant(ParticipantInterface $participant)
    {
    	return $this->repository->createQueryBuilder('b')
    	->innerJoin('b.participant', 'p')
    
    	->where('p.id = :participant_id')
    	->setParameter('participant_id', $participant->getId())
    
    	->getQuery()
    	->execute();
    }
    
    /**
     * Saves a rank
     *
     * @param RankInterface $rank
     */
    public function saveRank(RankInterface $rank)
    {
    	$this->em->persist($rank);
    	$this->em->flush();
    }
    
    /**
     * Returns the fully qualified Rank class name
     *
     * @return string
     */
    public function getClass()
    {
    	return $this->class;
    }
}