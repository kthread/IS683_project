<?php
class Creative_Works extends Thing{

	protected $about;
	protected $aggregateRating;
	protected $audio;
	protected $author;
	protected $awards;
	protected $contentLocation;
	protected $ContentRating;
	protected $datePublished;
	protected $editor;
	protected $encodings;
	protected $genre;
	protected $headline;
	protected $inLanguage;
	protected $interactionCount;
	protected $isFamilyFriendly;
	protected $keywords;
	protected $offers;
	protected $publisher;
	protected $reviews;
	protected $video;
	protected $itemType;

        function __construct() {
           $this->itemType->value = "http://www.schema.org/CreativeWorks";
        }

	function setAboutValue($var) {

		$this->about->value = $var;

	}

	function getAboutValue() {

		return $this->about->value;

	}

	function setAboutTag($var) {

		$this->about->tag = $var;

	}

	function getAboutTag() {
		if(strlen($this->about->tag) != 0){
			return $this->about->tag;
		}
		else{
			return 'h1';
		}

	}
	function setAboutAttributes($var) {
		//$class = get_class($this) . ' about ' . $var;
		//$this->about->attributes['class'] = $class;
		$this->about->attributes['itemprop'] = 'about';
	}

	function getAboutAttributes() {

		return $this->about->attributes;

	}

	private function printAboutHtmlTag(){
		$tag = new Tag($this->getAboutTag(), $this->getAboutAttributes(), $this->getAboutValue());
		return $tag->get_tag();
	}

	function setAggregateRatingValue($var) {

		$this->aggregateRating->value = $var;

	}

	function getAggregateRatingValue() {

		return $this->aggregateRating->value;

	}

	function setAggregateRatingTag($var) {

		$this->aggregateRating->tag = $var;

	}

	function getAggregateRatingTag() {
		if(strlen($this->aggregateRating->tag) != 0){
			return $this->aggregateRating->tag;
		}
		else{
			return 'h1';
		}

	}
	function setAggregateRatingAttributes($var) {
		 
		//$class = get_class($this) . ' aggregateRating ' . $var;
		//$this->aggregateRating->attributes['class'] = $class;
		$this->aggregateRating->attributes['itemprop'] = 'aggregateRating';
	}

	function getAggregateRatingAttributes() {

		return $this->aggregateRating->attributes;

	}
	private function printAggregateRatingHtmlTag(){
		$tag = new Tag($this->getAggregateRatingTag(), $this->getAggregateRatingAttributes(), $this->getAggregateRatingValue());
		return $tag->get_tag();
	}
	
function setAuthorValue($var) {

		$this->author->value = $var;

	}

	function getAuthorValue() {

		return $this->author->value;

	}

	function setAuthorTag($var) {

		$this->author->tag = $var;

	}

	function getAuthorTag() {
		if(strlen($this->author->tag) != 0){
			return $this->author->tag;
		}
		else{
			return 'span';
		}

	}
	function setAuthorAttributes($var) {
	  
		//$class = get_class($this) . ' author ' . $var;
		//$this->author->attributes['class'] = $class;
		$this->author->attributes['itemprop'] = 'author';
	}

	function getAuthorAttributes() {

		return $this->author->attributes;

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
