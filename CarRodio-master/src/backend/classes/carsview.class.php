<?php

include(__DIR__ . './cardetails.class.php');
include(__DIR__ . './cardetailsview.class.php');

class CarView extends Car
{


    public function showCarsforAds($ID)
    {
        $results = $this->getCar($ID);
        foreach ($results as $name) {
            $carDetailsID = $name['CarDetails'];
            echo <<<EOT
     
            
                        <div class="col-md-4">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
EOT;
            $Details = new CarDetailsView();
            $Details->getCarImage($carDetailsID);

            echo <<<EOT

                                    
                                    <a class="btn-overlay" href="./ad-details.php?id={$name['ID']}"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="#" class="title">{$name['CarBrandName']} {$name['Name']}</a>
                                         <a href="#" class="title">{$name['Model']}</a>
                                        <div class="price-wrap mt-2">
                                            <span class="price">{$name['Price']}</span>
                                            <span class="price" style="color:#118ab2;">{$name['VehicleCondition']}</span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a href="#" class="btn btn-block btn-primary">Add to cart </a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->

 
                   
             
EOT;
        }
    }

   
    public function showCars()
    {
        $results = $this->getCars();
        foreach ($results as $name) {
            $carDetailsID = $name['CarDetails'];
            echo <<<EOT
     
            
                        <div class="col-md-4">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
EOT;
            $Details = new CarDetailsView();
            $Details->getCarImage($carDetailsID);
         
            echo <<<EOT

                                    
                                    <a class="btn-overlay" href="./ad-details.php?id={$name['ID']}"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="#" class="title">{$name['CarBrandName']} {$name['Name']}</a>
                                         <a href="#" class="title">{$name['Model']}</a>
                                        <div class="price-wrap mt-2">
                                            <span class="price">{$name['Price']}</span>
                                            <del class="price-old">{$name['Price']}</del>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a href="#" class="btn btn-block btn-primary">Add to cart </a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->

 
                   
             
EOT;
    


        }
    }

    public function getCarTitle($ID)
    {
        $results = $this->getCar($ID);
        foreach ($results as $name) {
           
            echo <<<EOT
     <title>{$name['Name']}</title>
EOT;
        }
    }

    public function getSearchedCar($Keyword)
    {
        $results = $this->searchCars($Keyword);
        foreach ($results as $name) {

            return $name['ID'];
         
        }
    }



    public function getSingleCar($ID)
    {
        $results = $this->getCar($ID);
        foreach ($results as $name) {

            echo <<<EOT
     <h2 class="title">{$name['CarBrandName']} {$name['Name']} {$name['Model']}  </h2>
     <h4 class="title" style="color: blue;">{$name['VehicleCondition']} </h2>
      <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <small class="label-rating text-muted">132 reviews</small>
                                <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
                            </div> <!-- rating-wrap.// -->

                            <div class="mb-3">
                                <var class="price h4">{$name['Price']}</var>
                                <span class="text-muted">/Rs</span>
                            </div> <!-- price-detail-wrap .// -->
EOT;
        }
    }


}
