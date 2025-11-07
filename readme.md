# Gallery2
Gallery2 is a fork of PHP Gallery by TNTcode.com, developed in open-source way to improve the original script and make it more advanced than it was. The snapshotted version of PHP Gallery is 1.0.4.

## Contact
Since Gallery2 is a fork of PHP Gallery, it isn't maintained by it's original developer. If you have seen an issue, please open a pull request, and let us know about it. Thank you!

## Changelog (original)
### v1.0.4
* In settings.php added variable $settings_max_upload_file_size_mb in order to control maximum uploaded photo size,
* On category page > upload form it now shows the upload limits from settings.php and upload limits from php.ini,
* Added a "B" flag in 2 of the .htaccess rules, see the note at the end of this file and end of .htaccess file.

### v1.0.1
* You can now use special characters in category names and photo names, if you notice problems please contact us,
* You can upoad multiple photos by FTP and then go to "admin > regenerate images" in order to create thumbnails for them. Note: the new file name of each photo file was changed like this: landscape.jpg, landscape_small.jpg and landscape_thumb.jpg; names like landscape_source.jpg are no longer used.

## Known issues
These issues are derivative from original fork and will be fixed in near future:

#### The url rewrite doesn't work, e.g /gallery/login shows error but /gallery/login.php works ok
Solution: make sure on server you have the .htaccess in the gallery folder, open .htaccess file and uncomment this line:
RewriteBase /gallery
Replace the path /gallery with your own path if needed

#### Change sorting of photos or categories
Open system_header.php and look for these two: 
	krsort($categories_array[$folder]);
	ksort($categories_array);

See the comments above them on how to change sorting, first one sorts photos inside categories and the second one sorts the list of categories

#### Some servers had problems processing category names that contains spaces or other special characters
To fix this, a "B" flag was added in 2 rules of the .htaccess file [QSA] becoming [B,QSA]
if you click a category name and it returns "page not found", try removing the "B," in .htaccess rules

	Apache reference on B flag: https://httpd.apache.org/docs/2.4/rewrite/flags.html#flag_b