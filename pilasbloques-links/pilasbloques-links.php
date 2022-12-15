<?php
global $pilasBloquesVersion;

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
		return [ Elementor\Modules\DynamicTags\Module::URL_CATEGORY ];
	}
	public function render() {
		global $pilasBloquesVersion;
		echo 'https://github.com/Program-AR/pilas-bloques/releases/download/' . $pilasBloquesVersion . '/pilasbloques_' . $pilasBloquesVersion . '_amd64.deb';
	}
}

$pilasBloquesVersion = '1.12.3';

