=== Ours Privacy ===
Contributors: oursprivacy
Tags: privacy, analytics, tracking
Requires at least: 5.0
Tested up to: 6.7
Requires PHP: 7.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A privacy-forward WordPress plugin that loads the Ours Privacy Web SDK for HIPAA-compliant event tracking and analytics.

== Description ==

Ours Privacy's WordPress plugin integrates the Ours Privacy Web SDK into your WordPress site. Ours is a privacy-forward platform that helps you track and manage user data securely while ensuring compliance with regulations like HIPAA.

= Features =

* HIPAA-compliant event tracking
* Automatic tracking of key data like last-touch attribution and UTM parameters
* Secure data handling with options to redact or hash sensitive information
* Easy integration with major ad platforms and analytics tools
* Built-in privacy controls and data management

= Usage =

Once the plugin is activated, the Ours Privacy Web SDK will be automatically loaded on your site. You can then track events using the `ours()` function:

```javascript
// Track an event
ours('track', 'event name', { value: 1 }, { first_name: 'test' });

// Identify a user
ours('identify', { first_name: 'test' });
```

For detailed documentation on tracking events and using the SDK, visit our [Web SDK Documentation](https://docs.oursprivacy.com/).

== Installation ==

1. Upload the `ours` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The Ours Privacy Web SDK will be automatically loaded on your site

== Frequently Asked Questions ==

= What is Ours Privacy? =

Ours Privacy is a privacy-forward platform that acts as a layer between you and third-party platforms (e.g., Meta, Google), enabling you to capture user events while maintaining compliance with privacy regulations like HIPAA.

= How does it ensure HIPAA compliance? =

Ours Privacy provides built-in security features including data redaction, hashing of sensitive information, and secure data handling practices. For more information about our HIPAA compliance and security measures, visit our [documentation](https://docs.oursprivacy.com).

= What kind of events can I track? =

You can track various types of events including page views, form submissions, conversions, and custom events. The platform automatically tracks key data like last-touch attribution and UTM parameters. For a complete list of supported events and tracking capabilities, see our [Event and Identity documentation](https://docs.oursprivacy.com/docs/event-and-identity).

== Changelog ==

= 1.0.0 =
* Initial release
* Added Ours Privacy Web SDK integration
* Implemented automatic script loading
* Added HIPAA-compliant event tracking support

== Upgrade Notice ==

= 1.0.0 =
Initial release of the Ours Privacy WordPress plugin. 