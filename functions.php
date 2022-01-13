<?php

function profit_partner_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'pocetna' , array(
        'title'      => 'Pocetna stranica',
        'priority'   => 30,
    ) );



    $wp_customize->add_setting('nav_logo_d', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nav_logo_control_d', array(
        'label'             => __('Logo Desktop', 'name-theme'),
        'section'           => 'pocetna',
        'settings'          => 'nav_logo_d',    
    )));



    $wp_customize->add_setting('nav_logo_m', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nav_logo_control_m', array(
        'label'             => __('Logo Mobile', 'name-theme'),
        'section'           => 'pocetna',
        'settings'          => 'nav_logo_m',    
    )));



    $wp_customize->add_setting('naslov_1', array(
        'default'        => 'O nama',
    ));

    $wp_customize->add_control('naslov_1', array(
        'label'   => 'Naslov',
        'section' => 'pocetna',
        'type'    => 'text',
    ));



    $wp_customize->add_setting('paragraf_1', array(
        'default'        => 'Paragraf ispod naslova',
    ));

    $wp_customize->add_control('paragraf_1', array(
        'label'   => 'Paragraf',
        'section' => 'pocetna',
        'type'    => 'textarea',
    ));
    


    $wp_customize->add_setting('pocetna_slika_1', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pocetna_slika_1_control', array(
        'label'             => __('Slika - O nama', 'name-theme'),
        'section'           => 'pocetna',
        'settings'          => 'pocetna_slika_1',    
    )));
    
}

function profit_partner_customize_register_usluge( $wp_customize ) {
    $wp_customize->add_section( 'usluge' , array(
        'title'      => 'Usluge stranica',
        'priority'   => 30,
    ) );

    $wp_customize->add_setting('naslov_usluga_stranice_1', array(
        'default'        => 'Usluge koje pruzamo',
    ));

    $wp_customize->add_control('naslov_usluga_stranice_1', array(
        'label'   => 'Naslov',
        'section' => 'usluge',
        'type'    => 'text',
    ));
    


    $wp_customize->add_setting('blank1', array(
        'default'        => '',
    ));

    $wp_customize->add_control('blank1', array(
        'label'   => '‎',
        'section' => 'usluge',
        'type'    => 'hidden',
    ));



    $wp_customize->add_setting('usluga_naslov_1', array(
        'default'        => 'Osnivanje',
    ));

    $wp_customize->add_control('usluga_naslov_1', array(
        'label'   => 'Usluga 1 naslov',
        'section' => 'usluge',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('usluga_txt_1', array(
        'default'        => '',
    ));

    $wp_customize->add_control('usluga_txt_1', array(
        'label'   => 'Usluga 1',
        'section' => 'usluge',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('usluga_pic_1', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'usluga_pic_1_control', array(
        'label'             => __('Slika - O nama', 'name-theme'),
        'section'           => 'usluge',
        'settings'          => 'usluga_pic_1',    
    )));



    $wp_customize->add_setting('blank2', array(
        'default'        => '',
    ));

    $wp_customize->add_control('blank2', array(
        'label'   => '‎',
        'section' => 'usluge',
        'type'    => 'hidden',
    ));


    $wp_customize->add_setting('usluga_naslov_2', array(
        'default'        => 'Računovodstvo',
    ));

    $wp_customize->add_control('usluga_naslov_2', array(
        'label'   => 'Usluga 2 naslov',
        'section' => 'usluge',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('usluga_txt_2', array(
        'default'        => '',
    ));

    $wp_customize->add_control('usluga_txt_2', array(
        'label'   => 'Usluga 2',
        'section' => 'usluge',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('usluga_pic_2', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'usluga_pic_2_control', array(
        'label'             => __('Slika - O nama', 'name-theme'),
        'section'           => 'usluge',
        'settings'          => 'usluga_pic_2',    
    )));




    $wp_customize->add_setting('blank3', array(
        'default'        => '',
    ));

    $wp_customize->add_control('blank3', array(
        'label'   => '‎',
        'section' => 'usluge',
        'type'    => 'hidden',
    ));




    $wp_customize->add_setting('usluga_naslov_3', array(
        'default'        => 'Kadrovsko poslovanje',
    ));

    $wp_customize->add_control('usluga_naslov_3', array(
        'label'   => 'Usluga 3 naslov',
        'section' => 'usluge',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('usluga_txt_3', array(
        'default'        => '',
    ));

    $wp_customize->add_control('usluga_txt_3', array(
        'label'   => 'Usluga 3',
        'section' => 'usluge',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('usluga_pic_3', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'usluga_pic_3_control', array(
        'label'             => __('Slika - O nama', 'name-theme'),
        'section'           => 'usluge',
        'settings'          => 'usluga_pic_3',    
    )));




    $wp_customize->add_setting('blank4', array(
        'default'        => '',
    ));

    $wp_customize->add_control('blank4', array(
        'label'   => '‎',
        'section' => 'usluge',
        'type'    => 'hidden',
    ));




    $wp_customize->add_setting('usluga_naslov_4', array(
        'default'        => 'Ostali poslovi',
    ));

    $wp_customize->add_control('usluga_naslov_4', array(
        'label'   => 'Usluga 4 naslov',
        'section' => 'usluge',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('usluga_txt_4', array(
        'default'        => '',
    ));

    $wp_customize->add_control('usluga_txt_4', array(
        'label'   => 'Usluga 4',
        'section' => 'usluge',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('usluga_pic_4', array(
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'usluga_pic_4_control', array(
        'label'             => __('Slika - O nama', 'name-theme'),
        'section'           => 'usluge',
        'settings'          => 'usluga_pic_4',    
    )));
}


add_action( 'customize_register', 'profit_partner_customize_register' );
add_action( 'customize_register', 'profit_partner_customize_register_usluge' );