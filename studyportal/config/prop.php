<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

/*
 |--------------------------------------------------------------------------
 | View File Locations
 |--------------------------------------------------------------------------
 | Contains variables setting where the default view file directories are located.
 | All must be defined with trailing slashes, apart from RA_template_dir which is
 | blank by default
 */
$config["tree_template_dir"] = "";
$config["SITE_ROOT_IMAGE"] ="http://".$_SERVER['HTTP_HOST']."/dev/assets/sitefiles/images/";
$config["DIR_ROOT_IMAGE"] = $_SERVER['DOCUMENT_ROOT']."/assets/sitefiles/images/";

$config["tree_template"] = $config["tree_template_dir"] . "theme/janbask/home/";
$config["tree_template_include"] = $config["tree_template_dir"]."theme/janbask/home/include/";

$config["user_template"] = $config["tree_template_dir"]."theme/janbask/user/";
$config["user_template_include"] = $config["tree_template_dir"]."theme/janbask/user/include/";

$config["admin_template"] = $config["tree_template_dir"]."theme/janbask/admin/";
$config["admin_template_include"] = $config["tree_template_dir"]."theme/janbask/admin/include/";

$config["email_template"] = $config["tree_template_dir"]."theme/janbask/emails/";
// $config["tree_template_cv"] = $config["tree_template_dir"]."theme/center_view/";


/* End of file backendpro.php */
/* Location: system/application/config/ravpro.php */
