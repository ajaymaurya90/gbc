<?php

namespace App\Utils\AbstractClasses;

use Doctrine\ORM\EntityManagerInterface;
use mysql_xdevapi\Exception;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class CategoryTreeAbstract
{
    protected static $dbConnection; //to contain the categories array and singleton pattern
    public $categoriesArrayFromDb;
    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator)
    {
        $this->entityManager = $entityManager;
        $this->urlGeneratot = $urlGenerator;
        $this->categoriesArrayFromDb = $this->getCategories();
    }

    abstract function getCategoryList(array $category_array);

    public function buildCategoryTree($parent_id = null)
    {
        $subCategory = [];
        foreach($this->categoriesArrayFromDb as $category)
            {
                if($category['parent_id'] == $parent_id)
                {
                    $childCategory = $this->buildCategoryTree($category['id']);
                    if($childCategory)
                    {
                        $category['childCategory'] = $childCategory;
                    }
                    $subCategory[] = $category;
                }
            }
        return $subCategory;
    }

    private function getCategories()
    {
        if(self::$dbConnection)
        {
            return self::$dbConnection;
        }
        else{
            $conn = $this->entityManager->getConnection();
            $sql = "SELECT * FROM categories";
            try {
                $stmt = $conn->prepare($sql);
                $result = $stmt->executeQuery();
                return self::$dbConnection = $result->fetchAllAssociative();
            }catch(Exception $e)
            {
                echo 'Exception occur in getting categories from DB '. $e->getMessage();
            }
          }
    }
}
