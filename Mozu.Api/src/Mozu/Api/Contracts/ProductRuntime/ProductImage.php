<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Properties of an image defined for a product.
*/
class ProductImage
{
	/**
	*Descriptive text associated with the image or video that appears on the storefront.
	*/
	public $altText;
	public function getAltText() {
		return $this->altText;
	}
	
	public function setAltText($altText) {
		$this->altText = $altText;
		return $this;
	}

	/**
	*Image title that appears on the storefront.
	*/
	public $imageLabel;
	public function getImageLabel() {
		return $this->imageLabel;
	}
	
	public function setImageLabel($imageLabel) {
		$this->imageLabel = $imageLabel;
		return $this;
	}

	/**
	*Directory path where the product image file is stored.
	*/
	public $imagePath;
	public function getImagePath() {
		return $this->imagePath;
	}
	
	public function setImagePath($imagePath) {
		$this->imagePath = $imagePath;
		return $this;
	}

	/**
	*URL of the product image.
	*/
	public $imageUrl;
	public function getImageUrl() {
		return $this->imageUrl;
	}
	
	public function setImageUrl($imageUrl) {
		$this->imageUrl = $imageUrl;
		return $this;
	}

		public $mediaType;
	public function getMediaType() {
		return $this->mediaType;
	}
	
	public function setMediaType($mediaType) {
		$this->mediaType = $mediaType;
		return $this;
	}

	/**
	*The numeric value that denotes the place this entity occupies in the order of the entity list.
	*/
	public $sequence;
	public function getSequence() {
		return $this->sequence;
	}
	
	public function setSequence($sequence) {
		$this->sequence = $sequence;
		return $this;
	}

	/**
	*The file link or URL of the product video.
	*/
	public $videoUrl;
	public function getVideoUrl() {
		return $this->videoUrl;
	}
	
	public function setVideoUrl($videoUrl) {
		$this->videoUrl = $videoUrl;
		return $this;
	}

}

?>
