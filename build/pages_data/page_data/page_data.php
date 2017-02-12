<?php

class Page_data {
    public  $page = array();
    
    public function Get_data( $page ) {
        switch ( $page ) {
            case '404':
                $this -> page['suffix'] = '-404';
            break;
            default:
                $this -> page['suffix'] = '';
            break;
        }
        return $this -> page;
    }
    
    
}
$page_data = new Page_data();


?> 