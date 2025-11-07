<?php

$admin_user = $_ENV["admin_username"] ?? "admin";
$admin_password = $_ENV["admin_password"] ?? "1234";

$settings_page_title = $_ENV["title"] ?? "Gallery2";
$settings_page_description = $_ENV["description"] ?? "Gallery2";

// maximum allowed size per photo, in megabytes
// you might need to also increase values of upload_max_filesize and post_max_size in php.ini
// on upload form we will indicate all values / limits for a better understanding
$settings_max_upload_file_size_mb = $_ENV["max_upload_size"] ?? 10;

// if you will change thumbnail width or height, then login to admin area and re-generate thumbnails
$settings_thumbnail_width = $_ENV["thumbnail_width"] ?? '160';
$settings_thumbnail_height = $_ENV["thumbnail_height"] ?? '100';

$settings_photo_width = $_ENV["photo_width"] ?? '1200';
$settings_photo_height = $_ENV["photo_height"] ?? '650';

$settings_secret = $_ENV["secret"] ?? "";
$settings_gallery_version = "1.0.5.alpha0";

?>