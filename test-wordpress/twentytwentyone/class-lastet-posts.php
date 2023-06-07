<?php
class LastetPosts {
    public function __construct() {
        add_shortcode('gov_lastet_posts', array( $this, 'renderPosts' ) );
        add_shortcode('gov_pagination', array( $this, 'renderPagination' ) );
    }

    public function renderPosts() {
		
        while ( have_posts() ) {

            the_post();
            the_title(sprintf( '<li style="text-align:center;list-style: none;"><h2 style="padding:0px 0px;margin-top:5px; margin-bottom:5px;"><a href="%s" >', esc_attr( esc_url( get_permalink() ) ) ),'</a></h2>');
            the_post_thumbnail( [500,500] );
            printf( '<br><a href="%1$s" >%2$s</a></li>',esc_attr( esc_url( get_permalink() ) ),'Ver mais');

        }

    }

    public function renderPagination() {

        twenty_twenty_one_the_posts_navigation();
        the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'Anterior', 'gov_test' ),
            'next_text' => __( 'Seguinte', 'gov_test' ),
            ) );
		
		wp_reset_postdata();
    }

}