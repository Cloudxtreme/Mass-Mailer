<?php
/**
 * Mass Mailer plugin handler
 *
 * @package blesta
 * @subpackage blesta.plugins.mass_mailer
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */
class MassMailerPlugin extends Plugin {

	public function __construct() {
		Language::loadLang("mass_mailer_plugin", null, dirname(__FILE__) . DS . "language" . DS);

		$this->loadConfig(dirname(__FILE__) . DS . "config.json");
	}

	/**
	 * Performs any necessary bootstraping actions
	 *
	 * @param int $plugin_id The ID of the plugin being installed
	 */
	public function install($plugin_id) {

	}

	/**
	 * Performs migration of data from $current_version (the current installed version)
	 * to the given file set version
	 *
	 * @param string $current_version The current installed version of this plugin
	 * @param int $plugin_id The ID of the plugin being upgraded
	 */
	public function upgrade($current_version, $plugin_id) {

	}

	/**
	 * Performs any necessary cleanup actions
	 *
	 * @param int $plugin_id The ID of the plugin being uninstalled
	 * @param boolean $last_instance True if $plugin_id is the last instance across all companies for this plugin, false otherwise
	 */
	public function uninstall($plugin_id, $last_instance) {

	}

	/**
	 * Returns all actions to be configured for this widget (invoked after install() or upgrade(), overwrites all existing actions)
	 *
	 * @return array A numerically indexed array containing:
	 * 	- action The action to register for
	 * 	- uri The URI to be invoked for the given action
	 * 	- name The name to represent the action (can be language definition)
	 */
	public function getActions() {
		return array(
			array(
				'action' => "nav_secondary_staff",
				'uri' => "plugin/mass_mailer/admin_main/",
				'name' => Language::_("MassMailerPlugin.admin_forms.name", true),
				'options' => array('parent' => "tools/")
			)
		);
	}
}
?>
