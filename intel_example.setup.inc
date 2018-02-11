<?php

/**
 * Included to assist in initial setup of plugin
 *
 * @since      1.0.0
 *
 * @package    Intel
 */

if (!is_callable('intel_setup')) {
	include_once intel_example()->dir . 'intel_com/intel.setup.inc';
}

class Intel_Example_Setup extends Intel_Setup {

	public $plugin_un = 'intel_example';

	/*
	 * Include any methods from Intel_Setup you want to override
	 */

}

function intel_example_setup() {
	return Intel_Example_Setup::instance();
}
intel_example_setup();