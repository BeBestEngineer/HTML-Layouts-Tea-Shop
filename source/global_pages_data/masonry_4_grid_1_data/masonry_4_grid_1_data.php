<?php

class Masonry_4_grid_1_data {
    public $masonry_4_grid_1_data;
    public $path = 'other_modules/custom_modules/masonry_4_grid_1/masonry_4_grid_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'home':
                switch ( $position ) {
                    case 'position-1':
                        $this -> masonry_4_grid_1_data = array (
                            'path' => $this -> path                            
                        );
                    break;
                }
            break;
        }
        return $this -> masonry_4_grid_1_data;
    }
    
    
}
$masonry_4_grid_1_data = new Masonry_4_grid_1_data();

?>