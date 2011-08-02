<?php
class Creative_Works extends Thing{

	private $about;
	private $aggregateRating;
	private $audio;
	private $author;
	private $awards;
	private $contentLocation;
	private $ContentRating;
	private $datePublished;
	private $editor;
	private $encodings;
	private $genre;
	private $headline;
	private $inLanguage;
	private $interactionCount;
	private $isFamilyFriendly;
	private $keywords;
	private $offers;
	private $publisher;
	private $reviews;
	private $video;

        function __construct() {
	   parent::__construct();
	   $this->setItemTypeValue("http://www.schema.org/CreativeWorks");
	   $this->setItemTypeAttributes();
	   $this->about->attributes = array();
	   $this->aggregateRating->attributes = array();
	   $this->author->attributes = array();
        }

	function setAboutValue($var) {

		$this->about->value = $var;

	}

	function getAboutValue() {

		if(isset($this->about->value)) {
		   return $this->about->value;
		}

	}

	function setAboutTag($var) {

		$this->about->tag = $var;

	}

	function getAboutTag() {
		if(isset($this->about->tag)) {
		   if(strlen($this->about->tag) != 0){
			return $this->about->tag;
		   } else {
			return 'h1';
		   }
		} else {
		   return 'h1';
		}

	}
	function setAboutAttributes($var) {
		//$class = get_class($this) . ' about ' . $var;
		//$this->about->attributes['class'] = $class;
		$this->about->attributes['itemprop'] = 'about';
	}

	function getAboutAttributes() {

		if(isset($this->about->attributes)) {
		   return $this->about->attributes;
		}

	}

	private function printAboutHtmlTag(){
		$tag = new Tag($this->getAboutTag(), $this->getAboutAttributes(), $this->getAboutValue());
		return $tag->get_tag();
	}

	function setAggregateRatingValue($var) {

		$this->aggregateRating->value = $var;

	}

	function getAggregateRatingValue() {

		if(isset($this->aggregateRating->value)) {
		   return $this->aggregateRating->value;
		}

	}

	function setAggregateRatingTag($var) {

		$this->aggregateRating->tag = $var;

	}

	function getAggregateRatingTag() {
		if(isset($this->aggregateRating->tag)) {
		   if(strlen($this->aggregateRating->tag) != 0){
			return $this->aggregateRating->tag;
		   } else {
			return 'h1';
		   }
		} else {
		   return 'h1';
		}

	}
	function setAggregateRatingAttributes($var) {
		 
		//$class = get_class($this) . ' aggregateRating ' . $var;
		//$this->aggregateRating->attributes['class'] = $class;
		$this->aggregateRating->attributes['itemprop'] = 'aggregateRating';
	}

	function getAggregateRatingAttributes() {

		if(isset($this->aggregateRating->attributes)) {
		   return $this->aggregateRating->attributes;
		}

	}
	private function printAggregateRatingHtmlTag(){
		$tag = new Tag($this->getAggregateRatingTag(), $this->getAggregateRatingAttributes(), $this->getAggregateRatingValue());
		return $tag->get_tag();
	}
	
function setAuthorValue($var) {

		$this->author->value = $var;

	}

	function getAuthorValue() {

		if(isset($this->author->value)) {
		   return $this->author->value;
		}

	}

	function setAuthorTag($var) {

		$this->author->tag = $var;

	}

	function getAuthorTag() {
		if(isset($this->author->tag)) {
		   if(strlen($this->author->tag) != 0){
			return $this->author->tag;
		   } else {
			return 'span';
		   }
		} else {
		   return 'span';
		}

	}
	function setAuthorAttributes($var) {
	  
		//$class = get_class($this) . ' author ' . $var;
		//$this->author->attributes['class'] = $class;
		$this->author->attributes['itemprop'] = 'author';
	}

	function getAuthorAttributes() {

		if(isset($this->author->attributes)) {
		   return $this->author->attributes;
		}

	}
	
        private function printAuthorHtmlTag(){
		$tag = new Tag($this->getAuthorTag(), $this->getAuthorAttributes(), $this->getAuthorValue());
		return $tag->get_tag();
	}

	function printHtml(){
		$html = $this->printItemScopeHtmlOpen($this->getItemTypeValue());
		$html = $html.$this->printItemScopeHtmlClose().'<br>';
		$html = $html.$this->printAboutHtmlTag().'<br>';
		$html = $html.$this->printAggregateRatingHtmlTag().'<br>';
		$html = $html.$this->printAuthorHtmlTag().'<br>';
		return $html;
	}

}
