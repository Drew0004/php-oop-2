<?php
    require_once __DIR__.'/product.php';
    require_once __DIR__.'/../traits/HasExpire.php';

    class food extends product{
        use HasExpire;
        public $flavor;
        public $kg;
        
        function __construct
        (
            $name, 
            $image, 
            $price,
            $category, 
            $stock, 
            $description,
            $ratings,
            string $expireDate,
            string $flavor, 
            int $kg
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
            $this->expireDate = $expireDate;
            $this->flavor = $flavor;
            $this->kg = $kg;
        }
    }

?>