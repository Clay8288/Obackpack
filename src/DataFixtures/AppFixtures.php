<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Continent;
use App\Entity\Country;
use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {/*
        $faker = Faker\Factory::create('fr_FR');

        // $product = new Product();
        // $manager->persist($product);

        // create 20 user!
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setEmail($faker->freeEmail());
            if ($i === 1) {
                $user->setRoles(['ROLE_ADMIN']);
            } else {
                $user->setRoles(['ROLE_USER']);
            }
            
            $user->setPassword("azerty");
            $user->setFirstname($faker->firstName());
            $user->setLastname($faker->lastName());
            $user->setNickname($faker->userName());
            $user->setCountry($faker->country());
            $user->setDateOfBirth($faker->dateTimeBetween('-50 years'));

            $manager->persist($user);

            // create post!
            for ($j = 0; $j < 20; $j++) {
                $post = new Post();

                $now = new \DateTime();
                $days = $now->diff($post->getCreatedAt())->days;
                $minimun = '-' . $days . 'days';

                $post->setTitle($faker->realText($maxNbChars = 10));
                $post->setContent($faker->realText($maxNbChars = 200));
                $post->setCreatedAt($faker->dateTimeBetween($minimun));
                $post->setUpdatedAt($faker->dateTimeBetween($minimun));
                $post->setPublishedAt($faker->dateTimeBetween($minimun));
                $post->setUser($user);

                $manager->persist($post);

                for ($k = 1; $k <= mt_rand(1, 10); $k++) {
                    $comments = new Comment();

                    $now = new \DateTime();
                    $days = $now->diff($post->getCreatedAt())->days;
                    $minimun = '-' . $days . 'days';

                    $comments->setContent($faker->realText($maxNbChars = 50));
                    $comments->setCreatedAt($faker->dateTimeBetween($minimun));
                    $comments->setUpdatedAt($faker->dateTimeBetween($minimun));
                    $comments->setPublishedAt($faker->dateTimeBetween($minimun));
                    $comments->setPost($post);
                    $comments->setUser($user);

                    $manager->persist($comments);
                }
            }
        }*/
    }
}