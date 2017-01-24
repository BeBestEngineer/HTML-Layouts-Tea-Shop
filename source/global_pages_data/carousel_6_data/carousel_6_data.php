<?php

class Carousel_6_data {
    public $carousel_6_data;
    public $path = 'other_modules/custom_modules/carousel_6/carousel_6.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'about-us':
                switch ( $position ) {
                    case 'position-1':
                        $this -> carousel_6_data = array(
                            'path' => $this -> path,
                            'id' => '-our-team-pos-1',
                            'suffix' => '-our-team-pos-1',
                            'img-src' => 'images/other_modules/custom_modules/carousel_6_about-us_pos_1/',
                            'title-of-section' => 'Out team',
                            'members' => array(
                                '1' => array(
                                    'name' => 'Lin',
                                    'post' => 'main manager'
                                ),
                                '2' => array(
                                    'name' => 'Alex',
                                    'post' => 'junior manager'
                                ),
                                '3' => array(
                                    'name' => 'Shon',
                                    'post' => 'trainee manager'
                                ),
                                '4' => array(
                                    'name' => 'Kristin',
                                    'post' => 'trainee main manager'
                                ),
                                '5' => array(
                                    'name' => 'Juli',
                                    'post' => 'trainee manager'
                                ),
                                '6' => array(
                                    'name' => 'Mark',
                                    'post' => 'trainee manager'
                                ),
                                '7' => array(
                                    'name' => 'Eva',
                                    'post' => 'trainee manager'
                                ),
                                '8' => array(
                                    'name' => 'Max',
                                    'post' => 'trainee manager'
                                )                                
                            ),
                        );
                    break;                
                }
            break;
        }
        return $this -> carousel_6_data;
    }
    
    
}
$carousel_6_data = new Carousel_6_data();

?>