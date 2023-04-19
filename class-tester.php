<?php
/**
 * Tester
 *
 * @version 1.0.0
 * @since   1.0.0
 *
 * @author  WPFactory.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

if ( ! class_exists( 'Test' ) ) {

	class Test {

		/**
		 * asdasd.
		 *
		 * @return string
		 * @since   1.6.4
		 *
		 * @version 1.6.4
		 */
		function my_test( $type ) {
			// asdasdasd
			$test  = 5;
			$array = array(
				'as',
				'asd',
				'asd',
				'asd' => 'dsdsd',
			);

			$array = array( 'asd' => 'dsdsd' );

			$test_array = array(
				'a' => 'a',
				'b',
			);

			return 'asd';
		}
	}
}
