# NKD WordPress theme
This theme for *NKD* is based on the original site built using Laravel and BootStrap ported from less to SASS in July 2014 by Lawrence Eldridge. The WordPress theme was built on top on the _s theme and had it's gulp script updated to incorporate CSS optimisation. The key addition to this site is the 'Insights' section. The theme was created by Ben Usher Smith in July 2016.

# NKD WordPress Site Set-up

## 1. Install and configure WordPress
* **Note:** If you are working on a development server and want to add data from another WordPress install install the "WordPress Database Reset" plugin by Chris Berthe. - If installing from fresh or using the "WordPress Database Reset" remove all the default content WordPress adds manually. Go to the Posts tab and then delete all posts, then go to the Pages tab and delete all pages.*

## 2. Install the following plugins in order:
* Advanced Custom Fields (A.K.A ACF) By Elliot Condon 
* Gravity Forms By Rocketgenius
* Gravity Forms MailChimp Add-On By Rocketgenius 

## 3. Install the NKD theme
### You can do this two ways:
Via the WordPress admin area. - To do this zip up your theme folder and upload it through 'Appearance' > 'Themes' > 'Add New' (top left hand button in the main content area.) > 'Upload Theme' (top left hand button in the main content area.) > 'Choose File' > 'Install Now’.
Via FTP. - Upload your theme folder via FTP to the 'wp-content' > 'themes' located in the root of your WordPress installation.

## 4. Import your data
1. Go to 'Tools' > 'Import' > 'WordPress' (bottom of the list in the content area.)
Select 'Choose File' and navigate to the exported XML file and then 'Upload file and import'
2. On the next page check 'Download and import file attachments' and then 'Submit'
The next screen will confirm if the import has been successful and if there has been anything that failed to import or if anything has been ignored because it already exists. If you have imported users as part of the import it'll remind you to update the passwords and roles of the imported users as these won't have been imported.

## 5. Setting up your site
1. Go to 'Settings' > 'General' - Then replace or remove the default tagline 'Just another WordPress site' and set the site language to 'English (UK)' and then 'Save Changes'.
2. Next got to 'Settings' > 'Reading' - Set the the front page to a static page and then select 'Home' for your front page and then set 'Insights' as your posts page, and then 'Save Changes'.
3. Next go to 'Settings' > 'Permalinks' - Set the common settings to 'Post name', and then 'Save Changes'.


* **Common issues** - If you get a 404 error on a page that should exist it is possible settings are not being read properly. To fix this go to 'Settings' > 'Permalinks' - Set the ‘Common Settings’ to 'Plain', and 'Save Changes' then switch the settings back to 'Post name', and 'Save Changes'. This will force WordPress to update the .htaccess and should resolve the issues.*

---

## Plugins, Add-ons & Frameworks

The original site was built using Laravel and utilised a series of plugins and frameworks I have listed them below and indicated where key instances are used. You may in future developments wish to
This site uses the following frameworks/plugins:

-----

*Skrollr -* This is primarily used for the animations on the Case Studies pages and was not originally implemented correctly as a number of the animations were not working correctly. This may be because of it being tied into the Isotope plugin (see ckeditor notes.) The animations were fixed as part of the re-platform from Laravel to WordPress.

For documentation on Skrollr visit here: [https://github.com/Prinzhorn/skrollr](https://github.com/Prinzhorn/skrollr) (Check the readme on the repo!)

-----

*Bootstrap 3 -* This was used for the core layout design, it was ported from a LESS version to a SASS version by the original developer of the Laravel site. The documentation remains the same. However you should be aware of this change if you set-up a SASS compiler in the future.

For documentation on Bootstrap 3 visit here: [http://bootstrapdocs.com/v3.0.3/docs/css/](http://bootstrapdocs.com/v3.0.3/docs/css/)

-----

*Isotope -* This is used for the sorting of the 'One big family' section on the 'About Us' page.

For documentation on Isotope visit here: [http://isotope.metafizzy.co](http://isotope.metafizzy.co)

-----

*ckeditor -* This was used as the CMS content editor for the original Laravel site there are still elements within the site that have id's and inline styles that were generated by it and some JavaScript still references this I have tried to move as much of this as I can but in order to remove it all the site would need to be rebuilt. Rebuilding the site was out of scope of this project!

For documentation on ckeditor go here:  [http://docs.ckeditor.com](http://docs.ckeditor.com)

-----

*jQuery -* This site uses JQuery core 2.1.1 and it also uses  JQuery UI 1.11.1 these are used by Skrollr, Isotope, Bootstrap 3 and the remaining pieces of the ckeditor. These versions of JQuery are not the latest versions of JavaScript that ship with WordPress so the theme has code in the functions.php that dequeues the newer versions and then enqueues the correct versions.

For documentation on JQuery go here: [https://api.jquery.com/category/version/1.12-2.2/](https://api.jquery.com/category/version/1.12-2.2/)
For more on how to dequeue scripts go here: [https://codex.wordpress.org/Function_Reference/wp_dequeue_script](https://codex.wordpress.org/Function_Reference/wp_dequeue_script)