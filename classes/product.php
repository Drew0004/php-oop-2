<?php
    class product{
        public $name;
        public $image;
        public $price;
        public $category;
        public $stock;
        public $description;
        public $ratings;

        function __construct(
            string $name, 
            string $image, 
            int $price, 
            string $category,
            int $stock,
            string $description = 'Not found',
            int $ratings = null
            )
        {
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->category = $category;
            $this->stock = $stock;
            $this->description = $description;
            $this->ratings = $ratings;
        }
    }
?>