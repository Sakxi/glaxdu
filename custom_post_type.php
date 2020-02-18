<?php

add_action('init','glx_facility_post_type',0);
add_action('init','glx_teacher_post_type',0);
add_action('init','glx_event_post_type',0);
add_action('init','glx_achivement_post_type',0);
add_action('init','glx_achvtest_post_type',0);
add_action('init','glx_course_post_type',0);
add_action('init','glx_aboutcourse_post_type',0);
add_action('init','glx_brand_post_type',0);
add_action('init','glx_shop_post_type',0);

function glx_facility_post_type(){
    $labels= array(
        'name' =>_x('Facilitys','Post Type General Name','glx'),
        'singular_name' =>_x('Facility','Post Type Singular Name','glx'),
        'menu_name' =>__('Facilitys','glx'),
        'parent_item_colon' =>__('Parent Facility','glx'),
        'all_items' =>__('All Facilitys','glx'),
        'view_item' =>__('View Facility','glx'),
        'add_new_item' =>__('Add New Facility','glx'),
        'add_new'=>__('Add New Facility','glx'),
        'edit_item' =>__('Edit Facility','glx'),
        'update_item' =>__('Update Facility','glx'),
        'search_items' =>__('Search Facility','glx'),
        'not_found' =>__('No Facilitys Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Facilitys','glx'),
        'description'=>__('Facilitys for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Facilitys',$args);
}


function glx_teacher_post_type(){
    $labels= array(
        'name' =>_x('Teachers','Post Type General Name','glx'),
        'singular_name' =>_x('Teacher','Post Type Singular Name','glx'),
        'menu_name' =>__('Teachers','glx'),
        'parent_item_colon' =>__('Parent Teacher','glx'),
        'all_items' =>__('All Teachers','glx'),
        'view_item' =>__('View Teacher','glx'),
        'add_new_item' =>__('Add New Teacher','glx'),
        'add_new'=>__('Add New Teacher','glx'),
        'edit_item' =>__('Edit Teacher','glx'),
        'update_item' =>__('Update Teacher','glx'),
        'search_items' =>__('Search Teacher','glx'),
        'not_found' =>__('No Teachers Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Teachers','glx'),
        'description'=>__('Teachers for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail',),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Teachers',$args);
}

function glx_event_post_type(){
    $labels= array(
        'name' =>_x('Events','Post Type General Name','glx'),
        'singular_name' =>_x('Event','Post Type Singular Name','glx'),
        'menu_name' =>__('Events','glx'),
        'parent_item_colon' =>__('Parent Event','glx'),
        'all_items' =>__('All Events','glx'),
        'view_item' =>__('View Event','glx'),
        'add_new_item' =>__('Add New Event','glx'),
        'add_new'=>__('Add New Event','glx'),
        'edit_item' =>__('Edit Event','glx'),
        'update_item' =>__('Update Event','glx'),
        'search_items' =>__('Search Event','glx'),
        'not_found' =>__('No Events Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Events','glx'),
        'description'=>__('Events for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Events',$args);
}

function glx_achivement_post_type(){
    $labels= array(
        'name' =>_x('Achivements','Post Type General Name','glx'),
        'singular_name' =>_x('Achivement','Post Type Singular Name','glx'),
        'menu_name' =>__('Achivements','glx'),
        'parent_item_colon' =>__('Parent Achivement','glx'),
        'all_items' =>__('All Achivements','glx'),
        'view_item' =>__('View Achivement','glx'),
        'add_new_item' =>__('Add New Achivement','glx'),
        'add_new'=>__('Add New Achivement','glx'),
        'edit_item' =>__('Edit Achivement','glx'),
        'update_item' =>__('Update Achivement','glx'),
        'search_items' =>__('Search Achivement','glx'),
        'not_found' =>__('No Achivements Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Achivements','glx'),
        'description'=>__('Achivements for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Achivements',$args);
}
function glx_achvtest_post_type(){
    $labels= array(
        'name' =>_x('Achvtests','Post Type General Name','glx'),
        'singular_name' =>_x('Achvtest','Post Type Singular Name','glx'),
        'menu_name' =>__('Achvtests','glx'),
        'parent_item_colon' =>__('Parent Achvtest','glx'),
        'all_items' =>__('All Achvtests','glx'),
        'view_item' =>__('View Achvtest','glx'),
        'add_new_item' =>__('Add New Achvtest','glx'),
        'add_new'=>__('Add New Achvtest','glx'),
        'edit_item' =>__('Edit Achvtest','glx'),
        'update_item' =>__('Update Achvtest','glx'),
        'search_items' =>__('Search Achvtest','glx'),
        'not_found' =>__('No Achvtests Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Achvtests','glx'),
        'description'=>__('Achvtests for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Achvtests',$args);
}
function glx_aboutcourse_post_type(){
    $labels= array(
        'name' =>_x('AboutCourses','Post Type General Name','glx'),
        'singular_name' =>_x('AboutCourse','Post Type Singular Name','glx'),
        'menu_name' =>__('AboutCourses','glx'),
        'parent_item_colon' =>__('Parent AboutCourse','glx'),
        'all_items' =>__('All AboutCourses','glx'),
        'view_item' =>__('View AboutCourse','glx'),
        'add_new_item' =>__('Add New AboutCourse','glx'),
        'add_new'=>__('Add New AboutCourse','glx'),
        'edit_item' =>__('Edit AboutCourse','glx'),
        'update_item' =>__('Update AboutCourse','glx'),
        'search_items' =>__('Search AboutCourse','glx'),
        'not_found' =>__('No AboutCourses Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('AboutCourses','glx'),
        'description'=>__('AboutCourses for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('AboutCourses',$args);
}

function glx_course_post_type(){
    $labels= array(
        'name' =>_x('Courses','Post Type General Name','glx'),
        'singular_name' =>_x('Course','Post Type Singular Name','glx'),
        'menu_name' =>__('Courses','glx'),
        'parent_item_colon' =>__('Parent Course','glx'),
        'all_items' =>__('All Courses','glx'),
        'view_item' =>__('View Course','glx'),
        'add_new_item' =>__('Add New Course','glx'),
        'add_new'=>__('Add New Course','glx'),
        'edit_item' =>__('Edit Course','glx'),
        'update_item' =>__('Update Course','glx'),
        'search_items' =>__('Search Course','glx'),
        'not_found' =>__('No Courses Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Courses','glx'),
        'description'=>__('Courses for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Courses',$args);
}

function glx_brand_post_type(){
    $labels= array(
        'name' =>_x('Brands','Post Type General Name','glx'),
        'singular_name' =>_x('Brand','Post Type Singular Name','glx'),
        'menu_name' =>__('Brands','glx'),
        'parent_item_colon' =>__('Parent Brand','glx'),
        'all_items' =>__('All Brands','glx'),
        'view_item' =>__('View Brand','glx'),
        'add_new_item' =>__('Add New Brand','glx'),
        'add_new'=>__('Add New Brand','glx'),
        'edit_item' =>__('Edit Brand','glx'),
        'update_item' =>__('Update Brand','glx'),
        'search_items' =>__('Search Brand','glx'),
        'not_found' =>__('No Brands Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Brands','glx'),
        'description'=>__('Brands for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Brands',$args);
}


 
 
function glx_shop_post_type(){
    $labels= array(
        'name' =>_x('Shops','Post Type General Name','glx'),
        'singular_name' =>_x('Shop','Post Type Singular Name','glx'),
        'menu_name' =>__('Shops','glx'),
        'parent_item_colon' =>__('Parent Shop','glx'),
        'all_items' =>__('All Shops','glx'),
        'view_item' =>__('View Shop','glx'),
        'add_new_item' =>__('Add New Shop','glx'),
        'add_new'=>__('Add New Shop','glx'),
        'edit_item' =>__('Edit Shop','glx'),
        'update_item' =>__('Update Shop','glx'),
        'search_items' =>__('Search Shop','glx'),
        'not_found' =>__('No Shops Found','glx'),
        'not_found_in_trash' =>__('Not Found in Trash','glx'),
        
    );
    $args= array(
        'label'=>__('Shops','glx'),
        'description'=>__('Shops for glx','glx'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Shops',$args);
}

 












?>