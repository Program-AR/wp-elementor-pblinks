<?php

Class PilasBloquesLinkDeb extends \Elementor\Core\DynamicTags\Tag {
	public function get_name() {
		return 'pilasbloques-link-deb';
	}
    public function get_title() {
		return __( 'Link .deb', 'elementor-pro' );
	}
    public function get_group() {
		return 'pilasbloques-links';
	}
    public function get_categories() {
		return [ Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY ];
	}
    public function render() {
		echo 'https://github.com/Program-AR/pilas-bloques/releases/download/' . $pilasBloquesVersion . '/pilasbloques_' . $pilasBloquesVersion . '_amd64.deb';
	}
}
