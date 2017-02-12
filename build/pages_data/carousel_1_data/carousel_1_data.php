<?php

class Carousel_1_data {
    public $carousel_1;
    public $path = 'pages_modules/other_modules/custom_modules/carousel_1/carousel_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'home':
                switch ( $position ) {
                    case 'position-1':
                        $this -> carousel_1 = array (
                            'path' => $this -> path,
                            'id' => '-home-pos-1',
                            'suffix' => '-home-pos-1',
                            'img-src' => 'images/other_modules/custom_modules/carousel_1_home_pos_1/',
                            'title-of-section' => 'New products',
                            'title' => 'Nullam bibendum id lectus',
                            'price-without-discont' => '200',
                            'price-with-discont' => '160',
                            'discont-value' => '-20',
                        );
                    break;
                    case 'position-2':
                        $this -> carousel_1 = array (
                            'path' => $this -> path,
                            'id' => '-home-pos-2',
                            'suffix' => '-home-pos-2',
                            'img-src' => 'images/other_modules/custom_modules/carousel_1_home_pos_2/',
                            'title-of-section' => 'Very new products',
                            'title' => 'Cras et sapien ut odio ornare',
                            'price-without-discont' => '500',
                            'price-with-discont' => '375',
                            'discont-value' => '-25',
                        );
                    break;
                }
            break;
            case 'product':
                switch ( $position ) {
                    case 'position-1':
                        $this->carousel_1 = array(
                            'path' => $this->path,
                            'id' => '-product-pos-1',
                            'suffix' => '-product-pos-1',
                            'img-src' => 'images/other_modules/custom_modules/carousel_1_product_pos_1/',
                            'title-of-section' => 'Related products',
                            'title' => 'Calendula',
                            'price-without-discont' => '400',
                            'price-with-discont' => '200',
                            'discont-value' => '-50',
                        );
                    break;
                }
            break;            
        }
        return $this -> carousel_1;
    }
    
    
}
$carousel_1_data = new Carousel_1_data();

?>