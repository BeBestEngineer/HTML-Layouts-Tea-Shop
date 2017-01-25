<?php

class Blog_post_data {
    public    $blog_post_data;
    public    $path = 'other_modules/custom_modules/blog_post/blog_post.php';

    protected $title_of_block = 'Celebrate National Hot Tea Month This January';
    protected $img_src = 'images/blog/posts/';
    protected $desc_data = array(
                                'comments-quantity' => '2',
                                'autor' => 'Alex',
                                'text' => 'Since then, specialty tea has spread across the United States but the Bay Area still has the largest collection of high-end tea shops. Let’s dig into the list. If I’ve omitted any that you believe should be in the list, please let me know.',
                                'date' => '10 January 2017'
                            );


    public function Get_data( $page, $position ) {
        switch ( $page ) {
            case 'carousel-5':
                switch ( $position ) {
                    case 'recent-posts':
                        $this -> blog_post_data = array (
                            'path' => $this -> path,
                            'class__image-wrapper' => 'carousel-5__image-wrapper',
                            'img-src' => $this -> img_src,
                            'title-of-block' => $this -> title_of_block,
                            'desc' => array(
                                '1' => $this -> desc_data
                            )
                        );
                    break;
                }
            break;
            case 'blog':
                switch ( $position ) {
                    case 'recent-posts':
                        $this -> blog_post_data = array (
                            'path' => $this -> path,
                            'class__image-wrapper' => 'blog__post-image-wrapper',
                            'img-src' => $this -> img_src,
                            'title-of-block' => $this -> title_of_block,
                            'desc' => array(
                                '1' => $this -> desc_data
                            )
                        );
                        break;
                }
                break;
        }
        return $this -> blog_post_data;
    }
    
    
}
$blog_post_data = new Blog_post_data();

?>