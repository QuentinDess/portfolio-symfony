<?php

namespace App\DataFixtures;
use App\Entity\Article;
use App\Entity\Category;
use Faker\Factory;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker= Factory::create();
        $users= [];
        for($i=0; $i<50;$i++){
            $user= new User();
            $user->setFirstName($faker->name());
            $user->setLastName($faker->firstname());
            $user->setUsername($faker->name());
            $user->setEmail($faker->email());
            $user->setPassword($faker->password());
            $user->setCreatedAt(new \DateTime());
            $users[]=$user;
            $manager->persist($user);
        }
        $categories= [];
        for($i=0; $i<10;$i++){
            $category= new Category();
            $category->setTitle($faker->text(50));
            $category->setDescription($faker->text(50));
            $categories[]=$category;
            $manager->persist($category);
        }
        for($i=0; $i<200;$i++){
            $article= new Article();
            $article->setTitle($faker->text(50));
            $article->setContent($faker->text(250));
            $article->setAuthor($users[$faker->numberBetween(0,49)]);
            $article->addCategory($categories[$faker->numberBetween(0,9)]);
            $article->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        $manager->flush();
    }
}
