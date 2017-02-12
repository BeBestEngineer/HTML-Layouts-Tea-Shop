<?php

class List_with_title_1_data {
    public $list_with_title_1_data;
    public $path = 'pages_modules/other_modules/custom_modules/list_with_title_1/list_with_title_1.php';

    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'all':
                switch ( $position ) {
                    case 'footer-position-1':
                        $this -> list_with_title_1_data = array(
                            'path' => $this -> path,
                            'title' => 'Tea info',
                            'list-items' => array(
                              'Tea library',
                              'How to steep tea',
                              'Caffeine in tea',
                              'Tea and health'
                            )
                        );
                    break;
                    case 'footer-position-2':
                        $this -> list_with_title_1_data = array(
                            'path' => $this -> path,
                            'title' => 'About us',
                            'list-items' => array(
                                'Careers',
                                'Social responsibility',
                                'News and Notes',
                                'Media relations'
                            )
                        );
                    break;
                    case 'footer-position-3':
                        $this -> list_with_title_1_data = array(
                            'path' => $this -> path,
                            'title' => 'News',
                            'list-items' => array(
                                'Recent news',
                                'Tea party news',
                                'Science news',
                                'Archive'
                            )
                        );
                    break;
                    case 'footer-position-4':
                        $this -> list_with_title_1_data = array(
                            'path' => $this -> path,
                            'title' => 'Guides',
                            'list-items' => array(
                                'Create amazing tea guides',
                                'How to Start an Online Tea Business',
                                'Tea Business Model: Buying Directly From a Tea Producer',
                                'Archive'
                            )
                        );
                    break;
                    case 'footer-position-5':
                        $this -> list_with_title_1_data = array(
                            'path' => $this -> path,
                            'title' => 'Reviews',
                            'list-items' => array(
                                'Tea Cocktails',
                                'Growing Green Tea in Victoria, Australia',
                                'Zhang Ping Shui Xian Production in Photos',
                                'Archive'
                            )
                        );
                    break;
                }
            break;
        }
        return $this -> list_with_title_1_data;
    }
    
    
}
$list_with_title_1_data = new List_with_title_1_data();

?>