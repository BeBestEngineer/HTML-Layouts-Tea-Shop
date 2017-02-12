<?php

class Breadcrumbs_1_data {
    public $breadcrumbs_1_data;
    public $path = 'pages_modules/other_modules/custom_modules/breadcrumbs_1/breadcrumbs_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'products-list':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(),
                            'last-breadcrumb' => 'Tea list'
                            
                        );
                    break;
                }
            break;
            case 'product':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(
                                'Herbal tea'
                            ),
                            'last-breadcrumb' => 'Cascara Sagrada'
                        );
                        break;
                }
            break;
            case 'shopping-cart':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(),
                            'last-breadcrumb' => 'Shopping cart'
                        );
                        break;
                }
            break;
            case 'about-us':
            switch ( $position ) {
                case 'position-1':
                    $this -> breadcrumbs_1_data = array (
                        'path' => $this -> path,
                        'breadcrumbs' => array(),
                        'last-breadcrumb' => 'About us'
                    );
                    break;
            }
            break;
            case 'contact-us':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(),
                            'last-breadcrumb' => 'Contact us'
                        );
                    break;
                }
            break;
            case 'blog':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(),
                            'last-breadcrumb' => 'Blog'
                        );
                    break;
                }
            break;
            case 'blog-single-post':
                switch ( $position ) {
                    case 'position-1':
                        $this -> breadcrumbs_1_data = array (
                            'path' => $this -> path,
                            'breadcrumbs' => array(),
                            'last-breadcrumb' => 'Single post'
                        );
                    break;
                }
            break;
        }
        return $this -> breadcrumbs_1_data;
    }
}
$breadcrumbs_1_data = new Breadcrumbs_1_data();

?>