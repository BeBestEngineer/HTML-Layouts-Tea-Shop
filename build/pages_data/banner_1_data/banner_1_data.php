<?php

class Banner_1_data {
    public $banner_1_data;
    public $path = 'pages_modules/other_modules/custom_modules/banners/banner_1/banner_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'all':
                switch ( $position ) {
                    case 'position-1':
                        $this -> banner_1_data = array (
                            'path' => $this -> path,
                            
                        );
                    break;
                }
            break;
        }
        return $this -> banner_1_data;
    }
}
$banner_1_data = new Banner_1_data();

?>