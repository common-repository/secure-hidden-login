=== Secure Hidden Login ===
Contributors: apexad
Donate link: http://apexad.net/secure-hidden-login/
Tags: secure, hidden, login, single click, lock, the net, sandra bullock
Requires at least: 3.3.2
Tested up to: 4.0
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Secure Hidden Login hides the normal login and allows you to login wih a key combination or special button (in the same area taken up by the admin bar)

== Description == 

Secure Hidden Login allows you to have hidden a login bar (same size as the default Wordpress admin bar) on your site.

* Active it with a Lock in the upper right
* Activate it with a 'pi' symbol like "The Net" (with Sandra Bullock) in the bottom right
* Activate by clicking on a simple 'LOGIN' button at the top of the page
* Activate by clicking the 'Wordpress' Logo in the upper left (just like on the admin bar)
* Activate with a simple link in a widget that can be placed anywhere
* Completely Hidden and only activated with Ctrl/Alt+L (the 'L' can be changed in Settings)

Why you should use this plugin:

* Great for Security
* Makes Wordpress easier and quicker (no need to go to a different page to login)
* Option to block direct wp-login.php and wp-admin login (uses .htaccess file)


== Installation ==

1. Upload the `secure-hidden-login` folder to the `/wp-content/plugins` directory 
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Check Settings -> Secure Hidden Login for a few settings
1. That is all!


== Frequently Asked Questions ==

= Somehow I've locked myself out of my Wordpress Admin, what do I do? =

There are several solutions to this issue.

The Best:
You can upload an 'Emergency' Login page: 
&lt;html&gt;
&lt;head&gt;&lt;title&gt;Emergency Login&lt;/title&gt;&lt;/head&gt;
&lt;body&gt;&lt;a href="./wp-admin"&gt;Admin Page&lt;/a&gt;&lt;/body&gt;
&lt;/html&gt;

Remove Secure Hidden Login Admin Block:
Look in your Wordpress directory and wp-admin directory and edit the .htaccess files
Remove the Secure Hidden Login section including # BEGIN Secure Login to # END Secure Login

Try the Default Hidden Mode KeyCode:
Hit Ctrl+L

= Can I change the background color or other styles (CSS)? =

Yes! Check the plugin directory for style.css!
Note: You should override these styles in a 'Custom CSS' section as style.css will be overwritten if the plugin is updated.

= Does Secure Hidden Login have a Human Test/CAPTCHA? =

No, I hope to integrate one into a future release though.
However, Secure Hidden Login will fail gracefully if you used with SI Captcha'.

== Screenshots ==

1. A Screenshot of the different ways to activate the Login bar
2. A Screenshot of the Settings screen (on a site with User Registraion disabled)

== Changelog ==

= 1.0.3 =

* Fix: Right Side Lock Icon works again
* Info: Now tested up to Wordpress 4.0

= 1.0.2 =

* Fix: Forgot Password Links Sent Via E-mails work now
* Info: .htaccess file contents changed: may need to disable and re-enable wp-login.php block

= 1.0.1 =

* Fix: Left Side Wordpress Icon shows up again (in old Wordpress versions and 3.8)
* Info: Wordpress Icon uses 'dashicon' in Wordpress 3.8 so it looks a bit different
* Fix: Username/Password submit form moved to wp-login.php

= 1.0.0 =

* Info: Tested and updated for Wordpress 3.8
* New: Added a Filter to allow different 'Forgot Password' success test
* New: Added a Filter to allow a different 'LOGIN' text word
* Fix: Login bar form is now generated server side and added via ajax
* Fix: Forgot Password form is also generated server side
* Fix: Using placeholders instead of labels+css for input boxes (should correct alignment issues)
* Fix: Unable to deactivate Plugin bug due to missing .htaccess
* Fix: For Security, CSS file and Javascript now directly included in source code (script.js removed)
* Info: WP Scan Passive plugin enumerating will no longer find Secure Hidden Login
* Info: Added much more detail to the 'what do if locked out' FAQ question
* Info: FAQ Question to change styles added back
* Info: Human Test/CAPTCHA planned for next release (v1.1.0)

= 0.9.1 =

* Renamed some CSS classes to prevent conflict with other plugins (like Sidebar Login)

= 0.9 =

* (Request) If user registration is enabled, a 'Register' link can be added to the login bar
* Ran plugin with WP_DEBUG set to true (with Debug bar) and fixed all notices and warnings
* Fixed a bug that would cause an error if an incorrect password was entered
* Tested in Wordpress 3.5.1

= 0.8 =

* Re-branded as part of the 'EditSee' plugin suite
* Forgot Password integrated (no longer goes to the Forgot Password page with a valid entry)
* Forgot Password success message is displayed with new CSS
* Fixed 'Dashboard' button in iPhone/Android Wordpress Apps not working (when block wp-login.php is on)
* Fixed missing '&lt;/div&gt;' introduced in 0.6 when I removed jQuery check
* Added specific css for labels inside of the text box
* Settings Page: Moved donation button to the top of Settings, please consider donating!
* Settings Page: Changed 'Display Style' to a Select Box/Dropdown
* Settings Page: Moved 'Button Color' options to the bottom (all other options moved up)
* Settings Page: Renamed 'Save Changes' button to 'Update Secure Hidden Login Settings'
* Settings Page: Corrected some wording

= 0.7 =

* Added a Widget so a 'Login' Link can be placed anywhere (Title and Link Text can be customized)

= 0.6 =

* Changed minimum required version to Wordpress 3.3.2 (Tested and Working)
* Fixed some minor display issues caused by some themes (CSS resets)
* Option to 'Attempt to create' missing .htaccess file
* Moved Script Loading to Footer, (fixes jQuery load issues, removed FAQ question)
* Tested in Wordpress 3.5, No issues

= 0.5.1 =

* Now checks for a valid .htaccess file or does not allow wp-login.php block

= 0.5 =

* Added Simple LOGIN button Display Style
* Added Left Side Wordpress Icon Display Style
* Added a new color!  Yellow!
* Login Button Color and Forgot Password Color can now be set independently
* Lock Icon no longer stays on login bar after getting clicked
* Header on Settings page changed from Options to Settings
* Updated Frequently Asked Questions again (removed color question, added IE bug info)
* Skipped 0.4

= 0.3 =

* Fixed an issue with a PHP Warning coming up if Settings were not yet saved.
* Updated plugin description and information
* No longer using a .htaccess file in wp-admin (removed FAQ question relating to this)
* Cleaned up error messages relating to reading/writing to main .htaccess file
* Added a 'Redirect to Home page on Logout' option to further hide normal wordpress login
* Other minor code cleaning up and bugfixes

= 0.2 =
* Fixed some issues with the addition/removal of the .htaccess wp-admin/wp-login.php block code
* You can now change the color of the buttons

= 0.1.1 =
* upon deactivation, the plugin now automatically cleans up .htaccess files
* updated FAQ's including emergency login page code
* some other minor code cleanup and bufixes
* plugin will detect if jQuery loaded correctly, and if not write a link to wp-admin on the page

= 0.1 =
* Initial release
