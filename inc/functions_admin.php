<?php
  /*
    ==============
     ADMIN PAGE
    ==============
  
  */
  
  function sunsetblvd() {
      // generate the sunset admin page
      add_menu_page('Sunset Theme options', 'Sunsetblvd', 'manage_options', 
      'paulchabz_sunsetblvd', 'sunset_theme_create_page',
      get_template_directory_uri() . '/images/sunset-icon.jpg', 110);
      // generate sub menu pages 
      add_submenu_page('paulchabz_sunsetblvd', 'Sunset Theme options', 'Settings', 'manage_options',
      'paulchabz_sunsetblvd', 'sunset_theme_create_page');
      add_submenu_page('paulchabz_sunsetblvd', 'CSS Theme options', 'Custom CSS', 'manage_options',
      'paulchabz_sunsetblvd_css', 'sunset_theme_settings_page');
    }
    // Activate custom settings
    add_action('admin_menu', 'sunsetblvd_add_admin_page');
  
    add_action('admin_menu', 'sunsetblvd');
    
  function sunsetblvd_add_admin_page(){
      register_setting('sunset-settings-group', 'first_name');
      add_settings_section('sunsetblvd_sidebar_options', 'Sidebar Options','sunsetblvd_sidebar_options', 'paulchabz_sunsetblvd');
      add_settings_field('sidebar-name', 'First_Name', 'sunset_sidebar_name','paulchabz_sunsetblvd', 'sunsetblvd_sidebar_options');
  } 
  
  function sunset_sidebar_name() {
      echo '<input type="text" name="first_name" value=""/>';
  }
  
  function sunsetblvd_sidebar_options(){
      echo '<p>Welcome to the sidebar</p>';
  }
  
  function sunset_theme_create_page() {
      // Generation of the admin page.
     require_once(get_template_directory(). '/inc/templates/sunsetblvd_admin.php');
  }
  
  function sunset_theme_settings_page() {
      // Generation of other pages
  }
  
  
  
  

?>