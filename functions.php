<?php function loman_widgets_init() {
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar-holder',
        'before_title' => '<h1>',
        'after_h1' => '/h1'
    ));
}
add_action('widgets_init', 'sidebar_widgets_init'); ?>