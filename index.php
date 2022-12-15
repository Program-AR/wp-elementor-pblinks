<?php
/**
 * Plugin Name: Links de Pilas Bloques
 * Plugin URI: https://github.com/Program-AR/wp-elementor-pblinks
 * Description: Provee los links de los instaladores de Pilas Bloques como Etiquetas Dinámicas de Elementor
 * Author: Equipo de Desarrollo de Pilas Bloques
 * Author URI: https://github.com/Program-AR
 * Version: 1.0
 * Text Domain: wp-elementor-pblinks
 *
 * Copyright: (c) 2022 Equipo de Desarrollo de Pilas Bloques
 *
 * License: GNU AFFERO GENERAL PUBLIC LICENSE v3.0
 * License URI: https://www.gnu.org/licenses/agpl-3.0.html
 *
 * @author    PilasBloques
 * @copyright Copyright (c) 2022 Equipo de Desarrollo de Pilas Bloques
 * @license   https://www.gnu.org/licenses/agpl-3.0.html GNU AFFERO GENERAL PUBLIC LICENSE v3.0
 *
 */

defined( 'ABSPATH' ) or exit;

add_action( 'elementor/dynamic_tags/register_tags', function( $dynamic_tags ) {
    \Elementor\Plugin::$instance->dynamic_tags->register_group('pilasbloques-links', [
        'title' => 'Pilas Bloques Links'
    ] );

    include_once( __DIR__ . '/pilasbloques-links/pilasbloques-links.php' );

    $dynamic_tags->register_tag('PilasBloquesLinkDeb');
} );

