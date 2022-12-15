<?php
global $pilasBloquesVersion;

// Abstract
abstract class PilasBloquesLink extends \Elementor\Core\DynamicTags\Tag {
	public function baseURL(){
		return 'https://github.com/Program-AR/pilas-bloques/releases/download/';
	}
    public function get_group() {
		return 'pilasbloques-links';
	}
    public function get_categories() {
		return [ Elementor\Modules\DynamicTags\Module::URL_CATEGORY ];
	}
}

Class PilasBloquesLinkDeb extends PilasBloquesLink {
	public function get_name() {
		return 'pilasbloques-link-deb';
	}
    public function get_title() {
		return __( 'Link Descarga .deb', 'elementor-pro' );
	}
	public function render() {
		global $pilasBloquesVersion;
		echo $this->baseURL() . $pilasBloquesVersion . '/pilasbloques_' . $pilasBloquesVersion . '_amd64.deb';
	}
}

Class PilasBloquesLinkLinuxPortable extends PilasBloquesLink {
	public function get_name() {
		return 'pilasbloques-link-linuxportable';
	}
    public function get_title() {
		return __( 'Link Descarga Linux portable', 'elementor-pro' );
	}
	public function render() {
		global $pilasBloquesVersion;
		echo $this->baseURL() . $pilasBloquesVersion . '/pilasbloques-' . $pilasBloquesVersion . 'a-linux-x64.zip';
	}
}

Class PilasBloquesLinkWindows extends PilasBloquesLink {
	public function get_name() {
		return 'pilasbloques-link-windows';
	}
    public function get_title() {
		return __( 'Link Descarga Windows', 'elementor-pro' );
	}
	public function render() {
		global $pilasBloquesVersion;
		echo $this->baseURL() . $pilasBloquesVersion . '/pilasbloques-' . $pilasBloquesVersion . 'a.exe';
	}
}

Class PilasBloquesLinkMac extends PilasBloquesLink {
	public function get_name() {
		return 'pilasbloques-link-mac';
	}
    public function get_title() {
		return __( 'Link Descarga Mac OSX', 'elementor-pro' );
	}
	public function render() {
		global $pilasBloquesVersion;
		echo $this->baseURL() . $pilasBloquesVersion . '/pilasbloques-' . $pilasBloquesVersion . 'a.dmg';
	}
}

// ---------------------------------------------------
// Text Tag for having Version available to use
Class PilasBloquesVersion extends \Elementor\Core\DynamicTags\Tag {
	private string $baseURL = 'https://github.com/Program-AR/pilas-bloques/releases/download/';
    public function get_group() {
		return 'pilasbloques-links';
	}
    public function get_categories() {
		return [ Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY ];
	}
	public function get_name() {
		return 'pilasbloques-version';
	}
    public function get_title() {
		return __( 'Versión actual de Pilas Bloques', 'elementor-pro' );
	}
	public function render() {
		global $pilasBloquesVersion;
		echo 'Versión ' . $pilasBloquesVersion;
	}
}
// ---------------------------------------------------

$pilasBloquesVersion = '1.12.3';

