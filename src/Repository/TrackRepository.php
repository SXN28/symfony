<?php namespace App\Repository;

use App\Entity\Track;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Track>
 */
class TrackRepository extends ServiceEntityRepository
{

    private EntityManagerInterface $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Track::class);
        $this->entityManager = $entityManager;
    }

    public function addTrack(Track $track): void
    {
        if($track) {
            $this->entityManager->persist($track);
            $this->entityManager->flush();
        }
    }

    /**
     * Méthode personnalisée pour trouver une piste par son ID Spotify
     */
    public function findOneByTrackID(string $trackId): ?Track
    {
        return $this->findOneBy(['id' => $trackId]);
    }

    // Vous pouvez ajouter d'autres méthodes de requête ici
}
