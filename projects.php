<?php
/*
Plugin Name: Projects
Description: Declares a plugin that will create a project post type. Modified from https://www.smashingmagazine.com/2012/11/complete-guide-custom-post-types/
Version: 1.0
Author: Hannah Bishop
*/
function post_type_project() {
  $labels = array(
    'name'               => 'Projects', 'post type general name',
    'singular_name'      => 'Project', 'post type singular name',
    'add_new'            => 'Add New', 'book',
    'add_new_item'       => 'Add New Project',
    'edit_item'          => 'Edit Project',
    'new_item'           => 'New Project',
    'all_items'          => 'All Projects',
    'view_item'          => 'View Project',
    'search_items'       => 'Search Projects',
    'not_found'          => 'No projects found',
    'not_found_in_trash' => 'No projects found in the Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects',
    'parent'             => 'Parent Portfolio Item'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds projects and project specific data',
    'public'        => true,
    'menu_position' => 15,
    'supports'      => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
    'has_archive'   => true,
  );
  register_post_type( 'project', $args );
  flush_rewrite_rules();
}
add_action( 'init', 'post_type_project' );
?>
