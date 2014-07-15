<?php

//
//DawgDash 2014 Custom Shortcodes
//v1.0
///////////////////////

class dd_shortCodes {


	public function __construct()
    {
    	add_shortcode('faq-title', array($this, 'faq_title_func') );
    	add_shortcode('faq-content', array($this, 'faq_content_func') );
    	add_shortcode('bartag', array($this, 'bartag_func') );
    	add_shortcode('accordion-start', array($this, 'accordion_start_func'));
    	add_shortcode('accordion-stop', array($this, 'accordion_stop_func'));
    	add_shortcode('video', array($this, 'videoWrapper_func'));
    	add_shortcode('registerButton', array($this, 'registerButton_func'));
    	add_shortcode('copyArea', array($this, 'copy_func'));
	}



	// [faq-title target="#target element for collapse"]
	public function faq_title_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapese',
	    ), $atts );

	    return "<div data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{$a['target']}\">$content</div>";
	}

	// [faq-title target="#target element for collapse"]
	public function faq_content_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapese',
	    ), $atts );

	    return "<div class=\"collapse\" id=\"{$a['target']}\">$content</div><hr>";
	}

	// [accordion-start]
	public function accordion_start_func( ) {
    return   '<div id="accordion">';
	}

	// [accordion-stop]  //TODO  MAKE THIS A WRAPPING FUNCTION
	public function accordion_stop_func( ) {
    return   '</div>';
	}


	public function videoWrapper_func ($atts, $content="") {
		$a = shortcode_atts( array(
	        
	    ), $atts );
		
		return "<div class=\"videoWrapper pull-right\">$content</div>";

		
	}

	public function registerButton_func($atts)	{
		$a = shortcode_atts( array(
	        'link' => 'Link to Registration Page'
	    ), $atts );

	    return "<a id=\"registerButton\" title=\"link to registration page\" href=\"{$a['link']}\">Register Now</a>";
	}

		public function copy_func($atts, $content="")	{
		$a = shortcode_atts( array(
	        
	    ), $atts );

	    return '<div class="row"><div class="copy-container"><div class="copy-columns">'. do_shortcode($content). '</div></div></div>';
	}


};


$add_dd_shortcodes = new dd_shortCodes();







