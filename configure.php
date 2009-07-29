<?php
/**
 * Pines' WDDX configuration.
 *
 * @package Pines
 * @subpackage Core
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html
 * @author Hunter Perrin <hunter@sciactive.com>
 * @copyright Hunter Perrin
 * @link http://sciactive.com/
 */
defined('P_RUN') or die('Direct access prohibited');

$wddx_data = "<wddxPacket version='1.0'><header/><data><array length='12'><struct><var name='name'><string>full_location</string></var><var name='cname'><string>Full Location</string></var><var name='description'><string>The URL of this Pines installation. End this path with a slash!</string></var><var name='value'><string>http://localhost/pines/trunk/</string></var></struct><struct><var name='name'><string>rela_location</string></var><var name='cname'><string>Relative Location</string></var><var name='description'><string>The URL location of Pines relative to your server root. If it is in the root of the server, just put a slash (/). End this path with a slash!</string></var><var name='value'><string>/pines/trunk/</string></var></struct><struct><var name='name'><string>setting_upload</string></var><var name='cname'><string>Upload Directory</string></var><var name='description'><string>The directory to store uploaded files. This should be the real, relative path and the relative URL. End this path with a slash!</string></var><var name='value'><string>media/</string></var></struct><struct><var name='name'><string>option_title</string></var><var name='cname'><string>Page Title</string></var><var name='description'><string>The default title at the top of each page.</string></var><var name='value'><string>Pines</string></var></struct><struct><var name='name'><string>option_copyright_notice</string></var><var name='cname'><string>Copyright Notice</string></var><var name='description'><string>The copyright notice at the bottom of each page.</string></var><var name='value'><string>&amp;copy; 2009 Hunter Perrin. All Rights Reserved.&lt;br /&gt;Powered by Pines.</string></var></struct><struct><var name='name'><string>default_template</string></var><var name='cname'><string>Default Template</string></var><var name='description'><string>The default template.</string></var><var name='value'><string>pines</string></var></struct><struct><var name='name'><string>allow_template_override</string></var><var name='cname'><string>Template Override</string></var><var name='description'><string>Allow the template to be overriden by adding ?template=whatever</string></var><var name='value'><boolean value='true'/></var></struct><struct><var name='name'><string>url_rewriting</string></var><var name='cname'><string>URL Rewriting</string></var><var name='description'><string>Use url rewriting engine.</string></var><var name='value'><boolean value='true'/></var></struct><struct><var name='name'><string>use_htaccess</string></var><var name='cname'><string>Apache .htaccess</string></var><var name='description'><string>Use Apache .htaccess with mod_rewrite. (Rename htaccess.txt to .htaccess before using.)</string></var><var name='value'><boolean value='false'/></var></struct><struct><var name='name'><string>default_component</string></var><var name='cname'><string>Default Component</string></var><var name='description'><string>This component should have a &quot;default&quot; action. That action will be called when the user first accesses Pines. If an action is specified, but no component, this one will be used.</string></var><var name='value'><string>com_user</string></var></struct><struct><var name='name'><string>program_title</string></var><var name='cname'><string>Program Name</string></var><var name='description'><string>The program&#039;s internal name.</string></var><var name='value'><string>Pines</string></var></struct><struct><var name='name'><string>program_version</string></var><var name='cname'><string>Program Version</string></var><var name='description'><string>The program&#039;s internal version number. Changing this may cause problems while updating!</string></var><var name='value'><string>0.13 Alpha</string></var></struct></array></data></wddxPacket>";

?>