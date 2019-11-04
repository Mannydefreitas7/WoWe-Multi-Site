<?php 
$accountant_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 6
        ),
    ),
  );
  $dentist_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 5
        ),
    ),
  );
  $doctor_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 7
        ),
    ),
  );
  $lawyer_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 4
        ),
    ),
  );
  $plumber_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 8
        ),
    ),
  );
  $real_estate_args = array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 9
        ),
    ),
  );
  $args = $_GET['profession'];
  $services_query = new WP_Query( $args );
  ?>
  