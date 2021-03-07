<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private const DEFAULT_EMAIL = 'test@gmail.com';
    private const DEFAULT_PASS = 'test1234';

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail(self::DEFAULT_EMAIL);
        $user->setPassword($this->passwordEncoder->encodePassword($user, self::DEFAULT_PASS));

        $manager->persist($user);
        $manager->flush();
    }
}
