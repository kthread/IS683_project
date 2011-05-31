<?php

class HTML {

#var $doctype = '<!DOCTYPE HTML>';
#var $js_file = 'jquery';
#var $CSS_file = 'mystyle';
#var $body_tg = '<body>';
#var $HTML_tg = '<html>';
#var $H1_tg = '<h1>';
#var $H2_tg = '<h2>';
#var $H3_tg = '<h3>';
#var $H4_tg = '<h4>';
#var $H5_tg = '<h5>';
#var $H6_tg = '<h6>';

var $HTML_doctype = '';
var $javascr_link = '';
var $CSS_link = '';
var $body_tag = '';
var $HTML_tag = '';
var $H1_tag = '';
var $H2_tag = '';
var $H3_tag = '';
var $H4_tag = '';
var $H5_tag = '';
var $H6_tag = '';

#<!DOCTYPE HTML>
#<link rel="stylesheet" type="text/css" href="mystyle.css" /> (in head section)
#<script type="text/javascript" src="jquery.js"></script> (in head section)

   function set_HTML_doctype($doctype) {
      $this->HTML_doctype = $doctype;
   }

   function get_HTML_doctype() {
      return $this->HTML_doctype;
   }

   function set_javascr_link($js_file) {
      $this->javascr_link = "<script type=\"text/javascript\" src=\"$js_file.js\"></script>";
   }

   function get_javascr_link() {
      return $this->javascr_link;
   }

   function set_CSS_link($CSS_file) {
      $this->CSS_link = "<link rel=\"stylesheet\" type=\"text/css\" href=\"$CSS_file.css\" />";
   }

   function get_CSS_link() {
      return $this->CSS_link;
   }

   function set_body_tag($body_tg) {
      $this->body_tag = $body_tg;
   }

   function get_body_tag() {
      return $this->body_tag;
   }

   function set_HTML_tag($HTML_tg) {
      $this->HTML_tag = $HTML_tg;
   }

   function get_HTML_tag() {
      return $this->HTML_tag;
   }

   function set_H1_tag($H1_tg) {
      $this->H1_tag = $H1_tg;
   }

   function get_H1_tag() {
      return $this->H1_tag;
   }

   function set_H2_tag($H2_tg) {
      $this->H2_tag = $H2_tg;
   }

   function get_H2_tag() {
      return $this->H2_tag;
   }

   function set_H3_tag($H3_tg) {
      $this->H3_tag = $H3_tg;
   }

   function get_H3_tag() {
      return $this->H3_tag;
   }

   function set_H4_tag($H4_tg) {
      $this->H4_tag = $H4_tg;
   }

   function get_H4_tag() {
      return $this->H4_tag;
   }

   function set_H5_tag($H5_tg) {
      $this->H5_tag = $H5_tg;
   }

   function get_H5_tag() {
      return $this->H5_tag;
   }

   function set_H6_tag($H6_tg) {
      $this->H6_tag = $H6_tg;
   }

   function get_H6_tag() {
      return $this->H6_tag;
   }

}

?>
