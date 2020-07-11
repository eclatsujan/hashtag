<?php
// Some demo content
// And variables for Redux Framework
class AngoraDefaults {
	// Initialize
	public static function init( ) {
		global $angoraConfig;

		if ( ! isset( $angoraConfig ) or count( $angoraConfig ) == 0 ) {
			$angoraConfig = self::redux( );
		}
		
		if ( ! get_option( 'angora_started', false ) ) {
			self::save( );
		}
	}

	// Save state
	public static function save( ) {
		update_option( 'angora_started', 1 );
	}

	// Default options for Redux Framework
	public static function redux( ) {
		return array(			
			'home-page-title'        => esc_html__( 'Home', 'angora' ),
			'preloader'              => 1,
			'preloader-only-home'    => 1,
			'animations'             => 1,
			'multiple-videos'        => '',
			'settings'            	 => 0,
			
			'logo-dark'              => array( 'url' => '' ),
			'logo-light'             => array( 'url' => '' ),
			'logo-dark-retina'       => array( 'url' => '' ),
			'logo-light-retina'      => array( 'url' => '' ),
			'logo-height'            => 25,
			
			'header-sticky'          => 1,
			'header-nav-bgcolor'   	 => '#ffffff',
			'header-bgcolor'   		 => '#000000',
			'header-bgimage'         => array( 'url' => '' ),
			
			'footer-logo'            => array( 'url' => '' ),
			'footer-logo-retina'     => array( 'url' => '' ),
			'footer-button-top'      => 1,
			'widget-bgcolor'   	 	 => '#222222',
			'widget-bgimage'         => array( 'url' => '' ),
			'copyright-bgcolor'   	 => '#1a1a1a',
			'copyright-text'         => esc_html__( 'Copyright &copy; 2020 Angora', 'angora' ),

			'breadcrumbs'            => 1,
			'allow-share-posts'      => 1,
			'show-post-author'       => 1,
			'show-comments'      	 => 1,
			'layout-blog'         	 => 3,
			'layout-search'          => 3,
			
			'typography-content'     => array( 'font-family' => 'Open Sans', 'google' => 1, 'font-size' => '14px' ),
			'typography-headers-h1'  => array( 'font-family' => 'Poppins', 	 'google' => 1, 'font-size' => '70px' ),
			'typography-headers-h2'  => array( 'font-family' => 'Poppins', 	 'google' => 1, 'font-size' => '40px' ),
			'typography-headers-h3'  => array( 'font-family' => 'Poppins',   'google' => 1, 'font-size' => '32px' ),
			'typography-headers-h4'  => array( 'font-family' => 'Poppins',   'google' => 1, 'font-size' => '24px' ),
			'typography-headers-h5'  => array( 'font-family' => 'Poppins',   'google' => 1, 'font-size' => '20px' ),
			'typography-headers-h6'  => array( 'font-family' => 'Poppins',   'google' => 1, 'font-size' => '16px' ),
			
			'styling-schema'         => 'red',
			'body-bgcolor'   		 => '#ffffff',
			'loader-bgcolor' 		 => '#000000',
			
			'home-magic-mouse'       => 1,
			'home-magic-mouse-url'   => '#about',
			'home-video-play-btn'    => 1,
			'home-video-mutted'      => 1,
			'home-video-loop'        => 1,
			'home-video-start-at'    => 0,
			'home-video-stop-at'     => 0,
			'home-video-overlay'     => 40,
			'home-video-placeholder' => array( 'url' => '' ),
			'home-slideshow-timeout' => 10,
			
			'contact-email'          => '',
			'contact-template'       => '',
			
			'map-latitude'           => '37.800976',
			'map-longitude'          => '-122.428502',
			'map-zoom-level'         => 10,
			'map-google-api'         => '',
			'map-marker-state'       => 1,
			'map-marker'             => array( 'url' => '' ),
			'map-marker-popup-title' => esc_html__( 'Angora Main Office', 'angora' ),
			'map-marker-popup-text'  => esc_html__( 'Donec arcu nulla, semper et urna ac, laoreet porta.<br>Vivamus sodales efficitur massa at rhoncus.', 'angora' ),
			
		);
	}
}

add_action( 'after_setup_theme', array( 'AngoraDefaults', 'init' ) );
