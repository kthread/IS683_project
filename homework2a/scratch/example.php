<?php

$attributes = array();

$tag = 'h1';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = '!DOCTYPE';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'a';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'address';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'article';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'blockquote';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'body';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'br';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'div';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'footer';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'form';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h1';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h2';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h3';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h4';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h5';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'h6';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'head';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'header';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'html';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'ol';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'ul';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'li';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'p';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'span';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'section';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'style';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'link';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'details';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'summary';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'title';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'menu';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'nav';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'dl';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'dt';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'dfn';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

$tag = 'meta';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

function tag($tag, $attributes, $content) {
	
	$output = '<' . $tag;
	print_r($attributes);

	foreach($attributes as $key => $value) {
			$output .= ' ' . $key . '="' . $value . '"';
	}

	$output .= '>' . $content . '</' . $tag . '>';
	
	return $output;
}

function string_check($value) {
	
	if(is_string($value)) {
		return true;
	}
}

?>
