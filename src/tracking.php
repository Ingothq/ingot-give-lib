<?php
/**
 * Track Give conversion events
 *
 * @package   ingot-give-lib
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 Josh Pollock for Ingot LLC
 */

namespace ingot\addon\give;


use ingot\testing\tests\click\destination\hooks;

class tracking {

	/**
	 * Add the tracking hooks
	 *
	 * @since 1.1.0
	 */
	public function __construct(){
		add_action( 'give_complete_purchase', [ $this, 'donate' ] );
	}

	/**
	 * Track conversions when Give donation is made
	 *
	 * @since 1.1.0
	 *
	 * @uses "give_complete_purchase"
	 */
	public function add_to_cart(){
		hooks::get_instance([])->check_if_victory( 'donate' );
	}


}
