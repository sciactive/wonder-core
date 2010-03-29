<?php
/**
 * Load the system classes and objects.
 *
 * @package Pines
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 * @author Hunter Perrin <hunter@sciactive.com>
 * @copyright Hunter Perrin
 * @link http://sciactive.com/
 */
defined('P_RUN') or die('Direct access prohibited');

// Strip magic quotes.
if (get_magic_quotes_gpc()) {
	if (P_SCRIPT_TIMING) pines_print_time('Strip Request Slashes');
	pines_stripslashes_array_recursive($_GET);
	pines_stripslashes_array_recursive($_POST);
	pines_stripslashes_array_recursive($_REQUEST);
	pines_stripslashes_array_recursive($_COOKIE);
	if (P_SCRIPT_TIMING) pines_print_time('Strip Request Slashes');
}

if (P_SCRIPT_TIMING) pines_print_time('Load System Classes');
// Load system classes.
$temp_classes = pines_scandir("system/classes/");
foreach ($temp_classes as $cur_class) {
	/**
	 * Include each system class.
	 */
	if ($cur_class != 'hook_override_extend.php')
		include_once("system/classes/$cur_class");
}
unset($temp_classes);
if (P_SCRIPT_TIMING) pines_print_time('Load System Classes');

if (P_SCRIPT_TIMING) pines_print_time('Load Pines');
/**
 * The main object for Pines.
 *
 * This object is used to hold everything from Pines' settings, to component
 * functions. Components' configuration files will be parsed into $pines->config
 * under the name of their component. Such as $pines->config->com_xmlparser.
 * Components' classes will be automatically loaded into $pines under their name
 * when the variable is *first used*. For example, com_xmlparser will be loaded
 * the first time $pines->com_xmlparser is accessed.
 *
 * $pines also holds Pines' standard classes/objects (called "services"), which
 * include:
 *
 * Pines Core:
 *
 * - info - System and component info.
 * - config - System and component configuration.
 * - hook - Hook system.
 * - depend - Dependency system.
 * - menu - Menu system.
 * - page - Display controller.
 *
 * Provided by Components:
 *
 * - template - The current template's object.
 * - configurator - Manages configuration settings for Pines and components.
 * - log_manager - Manages logging features.
 * - entity_manager - Manages data abstraction (entities).
 * - user_manager - Manages users and groups.
 * - ability_manager - Manages users' abilities.
 * - editor - Provides a content editor.
 *
 * When you want to set your component as one of these services (excluding the
 * base system services), place a string with the name of your component's class
 * into the appropriate variable.
 *
 * For example, if you are designing a log manager called com_emaillogs, use
 * this in an init file (like i10set.php):
 *
 * <code>
 * $pines->log_manager = 'com_emaillogs';
 * </code>
 *
 * @global dynamic_loader $pines
 */
$pines = new dynamic_loader;

/**
 * Pines' and components' info.
 *
 * @global dynamic_info $pines->info
 */
$pines->info = new dynamic_info;

/**
 * Pines' and components' configuration.
 *
 * @global dynamic_config $pines->config
 */
$pines->config = new dynamic_config;

/**
 * The hook system.
 *
 * @global hook $pines->hook
 */
$pines->hook = new hook;

/**
 * The dependency system.
 *
 * @global depend $pines->depend
 */
$pines->depend = new depend;

/**
 * The menu system.
 *
 * @global menu $pines->menu
 */
$pines->menu = new menu;

/**
 * The display controller.
 *
 * @global page $pines->page
 */
$pines->page = new page;

if (P_SCRIPT_TIMING) pines_print_time('Load Pines');

?>