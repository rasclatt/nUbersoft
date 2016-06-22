<?php if(!function_exists("AutoloadFunction")) return;
AutoloadFunction("get_page_title,render_meta,javascript_expire_bar");
?><!DOCTYPE html>
<html>
<title><?php echo get_page_title(); ?></title>
<?php if($prefs['head']) {
?>
<head profile="http://www.w3.org/2005/10/profile">
<?php echo render_header($prefs); ?>
<?php echo render_meta(); ?>
<?php if(!empty($elements)) echo Safe::decode($elements).PHP_EOL; ?>
<?php if(is_admin()) { ?>
<script src="/js/admintools.js"></script>
<link type="text/css" rel="stylesheet" href="/css/admintools.css"/>
<link type="text/css" rel="stylesheet" href="/css/components.css"/>
<?php }
echo javascript_expire_bar().PHP_EOL;
?>
</head>
<?php }
?>