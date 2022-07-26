<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadMainCategories($manager);
        $this->loadElectronics($manager);
        $this->loadComputers($manager);
        $this->loadLaptops($manager);
        $this->loadBooks($manager);
        $this->loadMovies($manager);
        $this->loadRomanceMovies($manager);

    }

    private function loadMainCategories($manager)
    {
        foreach($this->getMainCategoryName() as [$name, $id] )
        {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
        }
        $manager->flush();
    }

    private function loadElectronics(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Electronics', 1);
    }

    private function loadComputers(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Computers', 6);
    }
    private function loadLaptops(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Laptops', 8);
    }

    private function loadBooks(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Books', 3);
    }

    private function loadMovies(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Movies', 4);
    }

    private function loadRomanceMovies(ObjectManager $manager)
    {
        $this->loadSubCategories($manager, 'Romance', 18);
    }

    private function loadSubCategories(ObjectManager $manager, $categoryName, $parent_id)
    {
        $parent = $manager->getRepository(Category::class)->find($parent_id);
        $methodName = "get{$categoryName}Data";
        foreach($this->$methodName() as [$name] )
        {
            $category = new Category();
            $category->setName($name);
            $category->setParent($parent);
            $manager->persist($category);
        }
        $manager->flush();
    }

    private function getMainCategoryName():array
    {
        return [
            ['Electronics',1],
            ['Toys', 2],
            ['Books', 3],
            ['Movies', 4]
        ];
    }

    private function getElectronicsData():array
    {
        return [
            ['Cameras',5],
            ['Computers', 6],
            ['Cell Phones', 7]
        ];
    }

    private function getComputersData():array
    {
        return [
            ['Laptops',8],
            ['Desktops', 9]
        ];
    }

    private function getLaptopsData():array
    {
        return [
            ['Apple',10],
            ['Asus',11],
            ['Dell', 12],
            ['Lenovo', 13],
            ['HP', 14]
        ];
    }

   private function getBooksData():array
    {
        return [
            ['Children\'s',15],
            ['Kindle eBooks', 16]
        ];
    }

    private function getMoviesData():array
    {
        return [
            ['Family',17],
            ['Romance', 18]
        ];
    }

    private function getRomanceData():array
    {
        return [
            ['RomanticComedy',19],
            ['RomanticDrama', 20]
        ];
    }
}
