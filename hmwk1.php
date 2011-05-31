<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
  <title>IS683 - Homework1</title>

 <?php include ("class_html.php"); ?> 
 </head>
 <body>

 <?php

$doctype = '<!DOCTYPE HTML>';
$js_file = 'jquery';
$CSS_file = 'mystyle';
$body_tg = '<body>';
$HTML_tg = '<html>';
$H1_tg = '<h1>';
$H2_tg = '<h2>';
$H3_tg = '<h3>';
$H4_tg = '<h4>';
$H5_tg = '<h5>';
$H6_tg = '<h6>';

$myhtml = new HTML();

$myhtml->set_HTML_doctype($doctype);
$myhtml->set_javascr_link($js_file);
$myhtml->set_CSS_link($CSS_file);
$myhtml->set_body_tag($body_tg);
$myhtml->set_HTML_tag($HTML_tg);
$myhtml->set_H1_tag($H1_tg);
$myhtml->set_H2_tag($H2_tg);
$myhtml->set_H3_tag($H3_tg);
$myhtml->set_H4_tag($H4_tg);
$myhtml->set_H5_tag($H5_tg);
$myhtml->set_H6_tag($H6_tg);

echo $myhtml->get_HTML_doctype()."\r\n";
echo $myhtml->get_javascr_link()."\r\n";
echo $myhtml->get_CSS_link()."\r\n";
echo $myhtml->get_body_tag()."\r\n";
echo $myhtml->get_HTML_tag()."\r\n";
echo $myhtml->get_H1_tag()."\r\n";
echo $myhtml->get_H2_tag()."\r\n";
echo $myhtml->get_H3_tag()."\r\n";
echo $myhtml->get_H4_tag()."\r\n";
echo $myhtml->get_H5_tag()."\r\n";
echo $myhtml->get_H6_tag()."\r\n";

?> 

 </body>
</html>
