<?php
/**
 * Easy Affiliate 辅助工具函数。
 *
 * @package Easy_Affiliate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function easy_affiliate_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
