# Panopto CourseCast for Moodle 2

## What is it?

This is a block for Moodle 2, that allows courses in Moodle to link directly to Panopto Courses, and to display recordings in the sidebar. It also allows for SSO between Moodle and Panopto CourseCast, and automatically syncs user permissions between both systems

## Credits

The original Panopto CourseCast plugin was written by Panopto for Moodle 1.9. It has since been rewritten for Moodle 2, by [Spenser Jones](http://spenserjones.com), and subsequently made open-source for collaboration between the open-source community and Panopto.

## How can I help?

Fork the block, fix a bug or add a new feature, and send us a pull-request. Or, if you're not a developer, but you've found a bug, add it to our [issue tracker](https://github.com/SpenserJ/Moodle2-Panopto/issues).

## To do:
* Rewrite SSO.php
* Optimize lib/PanoptoSoapClient.php
* Rewrite db/install.xml to support Moodle 2
* Convert role_(un)assigned event to only adjust single user in the course
* Move language-specific strings into lang/en/block_panopto.php
* * lib/panopto_data.php
* * SSO.php
* * views/provisioned_course.html.php