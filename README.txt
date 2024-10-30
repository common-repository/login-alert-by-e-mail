=== Login alert by e-mail===
Contributors: ruicruzpt
Donate link: https://www.paypal.com/paypalme/ruicruzpt
Tags: login, alert, email, login alert,
Requires at least: 5.0
Tested up to: 6.1.1
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Banner: http://plugins.svn.wordpress.org/login-alert-by-e-mail/trunk/assets/banner.png

This plugin sends email notifications to the website admin on successful and failed logins for each attempt. It helps the website administrator stay informed of user login activity while keeping the information secure.
You can act upon those e-mails, by blocking offending IP addresses.
Notifications are send in real time, so for busy websites you can get a lot of messages.

== Description ==

**TLDR:**
This is a plugin for WordPress websites that sends email notifications to the website admin for successful and failed login attempts. The email includes details like the username, IP address, and browser information. 

**Geek description:**
This WordPress plugin sends email notifications upon successful and failed logins to the website's admin. The plugin functions by hooking into the 'wp_login' and 'wp_login_failed' WordPress actions, and triggering the 'send_login_notification' and 'send_login_failed_notification' functions respectively.

The 'send_login_notification' function sends an email to the admin email address specified in the 'admin_email' option. The email includes details such as the successful login username, IP address, and browser information. The 'send_login_failed_notification' function sends a similar email to the admin, but for failed login attempts.

The plugin uses the wp_mail function to send the emails, and the messages are formatted as HTML for easy readability. The plugin ensures that the data being displayed, such as the username and IP address, is escaped using PHP's built-in escape functions. This is done to prevent potential security vulnerabilities, such as XSS (Cross-Site Scripting).

In summary, this plugin provides an easy way for website administrators to stay informed of user login activity on their site, while also ensuring that sensitive information is displayed securely.

== Frequently Asked Questions ==

= Will I get many e-mails? =

The frequency of emails you receive will depend on the login activity on your website. For every successful or failed login, an email notification will be sent to the website administrator. If you have a high volume of login activity, you may receive a higher volume of emails. You can adjust the notification settings in the code or turn off the plugin if desired.

= Is the email format easily readable? =

Yes, the emails are formatted as HTML for easy readability.

= Who receives the emails? =
The emails are sent to the admin email address specified in the 'admin_email' option.

= Is sensitive information displayed securely? =
Yes, the plugin uses PHP's built-in escape functions to secure sensitive information, such as the username and IP address, to prevent potential security vulnerabilities.



== Screenshots ==

1. Login with success for image loginok.png.
2 . Login withbout success for image loginfailed.png

== Changelog ==

= 1.0 =
Initial version released

== Upgrade Notice ==

= 1.0 =
Initial version released
