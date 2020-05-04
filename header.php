<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php wp_head();?>
</head>
<body <?php body_class('test');?>  >
    <header >
   
    <div class="container-fluid ph-3" >   

        <!-- TOP GREEN BAR -->
        <div id="top-bar" class="row  d-flex">
            <span>#top-bar</span>
            <span>#top-bar</span>
            <span>#top-bar</span>
            <span>#top-bar</span>
        </div>
    
   


    <!-- MAIN HEADER BAR -->
        <div id="main-bar" class="row d-flex  align-items-center justify-content-between vertical-align-middle">
            <img id="main-logo" src="<?php bloginfo('template_directory');?>/src/img/logo1.png" class="img-fluid">
            <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-menu d-flex justify-content-between'
                )
                );?>
        </div> 
        
   
    </div>  
    </header>