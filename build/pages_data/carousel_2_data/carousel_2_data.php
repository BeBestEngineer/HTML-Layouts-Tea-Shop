<?php

class Carousel_2_data {
    public $carousel_2;
    public $path = 'pages_modules/other_modules/custom_modules/carousel_2/carousel_2.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'all':
                switch ( $position ) {
                    case 'position-1':
                        $this -> carousel_2 = array (
                            'path' => $this -> path,
                            'id' => '-all-pos-1',
                            'suffix' => '-all-pos-1',
                            'img-src' => 'images/other_modules/custom_modules/carousel_2/',
                        );
                    break;
                }
            break;
        }
        return $this -> carousel_2;
    }
    
    
}
$carousel_2_data = new Carousel_2_data();

?>