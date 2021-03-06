<?php
/**
 * Render and output the page.
 *
 * @package Core
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 * @author Hunter Perrin <hperrin@gmail.com>
 * @copyright SciActive.com
 * @link http://sciactive.com/
 */
/* @var $_ core */
defined('P_RUN') or die('Direct access prohibited');

if (P_SCRIPT_TIMING) pines_print_time('Render Page');
// Render the page.
echo $_->page->render();
if (P_SCRIPT_TIMING) pines_print_time('Render Page', true);