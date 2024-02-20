<?php
    require_once __DIR__.'/product.php';
    require_once __DIR__.'/../traits/HasMaterials.php';

    class toy extends product{
        use HasMaterial;
        public $isOutdoor;
        
        function __construct
        (
            $name, 
            $image, 
            $price,
            $category, 
            $stock, 
            $description,
            $ratings,
            string $material, 
            bool $isOutdoor 
        )
        {
            parent::__construct
            (
                $name, 
                $image, 
                $price,
                $category, 
                $stock, 
                $description,
                $ratings
            );
            $this->material = $material;
            $this->isOutdoor = $isOutdoor;
        }
    }
?>