<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/var/www/faster.support/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/var/www/faster.support/wp-content/wflogs/');
	include_once '/var/www/faster.support/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>