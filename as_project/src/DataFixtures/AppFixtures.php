<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new Utilisateur();
        $roles[] = 'ROLE_ADMIN';
        $user->setNom('admin')
            ->setEmail('admin@gmail.com')
            ->setRoles($roles)
            ->setPassword('$argon2id$v=19$m=65536,t=4,p=1$ajhqTVpWc2RVSTRodDVFag$CGmI2OlEFkOk0ObpxwsEffGFbzyGqTUoSl7aOw1yMNw');//test
        $manager->persist($user);
        $manager->flush();

        $user = new Utilisateur();
        $roles2[] = 'ROLE_USER';
        $user->setNom('test')
            ->setEmail('test@gmail.com')
            ->setRoles($roles2)
            ->setPassword('$argon2id$v=19$m=65536,t=4,p=1$ajhqTVpWc2RVSTRodDVFag$CGmI2OlEFkOk0ObpxwsEffGFbzyGqTUoSl7aOw1yMNw');
        $manager->persist($user);
        $manager->flush();
    }
}
