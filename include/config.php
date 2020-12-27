<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'localhost';
$mysql_username = 'wildflow_k1';
$mysql_password = 'DBpwd321@';
$mysql_db = 'wildflow_k1';

$mysql_bin_path = '/usr/bin';

# Base URL of the installation
$baseurl = 'https://wildflowergallery.uk';

# Email settings
$email_notify = 'admin@wildflowergallery.uk';
$email_from = 'admin1@wildflowergallery.uk';
# Secure keys
$spider_password = 'cda62bb607b8a7a4db9e6e4ea543971c85deac4a78085c274bea9f63d82289e8';
$scramble_key = '5da7a35f99a7a7af98131b002428919bd31d27bb20b2923116d1585cd359b1cb';
$api_scramble_key = '8f22c9fe85b408c9efeccdf6c391526d6b07194a660a37360be510eebfbf55e5';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$homeanim_folder = 'filestore/system/slideshow_f636f579bd5d812';
$themes_in_my_collections = true;
/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1920;
$home_slideshow_height=1080;

$themes_simple_view=true;
$themes_category_split_pages=true;
$theme_category_levels=8;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;
$themes_show_background_image = true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v h264 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;
$search_filter_nodes = true;

$purge_temp_folder_age=90;
$filestore_evenspread=true;
