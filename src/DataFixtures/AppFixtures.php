<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private  $list_category = [
        [
            'title' => 'Java',
            'slug' => 'learn-java'
        ],
        [
            'title' => 'Html',
            'slug' => 'learn-html'
        ],
        [
            'title' => 'Go',
            'slug' => 'learn-go'
        ],
        [
            'title' => 'C',
            'slug' => 'learn-c'
        ],
        [
            'title' => 'C++',
            'slug' => 'learn-cplusplus'
        ],
        [
            'title' => 'JavaScript',
            'slug' => 'learn-javascript'
        ],
        [
            'title' => 'Php',
            'slug' => 'learn-php'
        ],
        [
            'title' => 'Shell',
            'slug' => 'learn-shell'
        ],
        [
            'title' => 'Perl',
            'slug' => 'learn-perl'
        ],
        [
            'title' => 'SQL',
            'slug' => 'learn-sql'
        ],

    ];

    public function load(ObjectManager $manager): void
    {


        foreach ($this->list_category as $category_item) {

            $category = new Category();
            $category->setTitle($category_item['title']);
            $category->setSlug($category_item['slug']);
            $manager->persist($category);
        }



        $manager->flush();
    }
}
