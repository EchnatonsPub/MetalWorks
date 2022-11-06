<?php
	$elements = new ElementInfo();
	
	class ElementInfo {
		private const NUMBER_OF_ELEMENTS = 118;
		private $element_array = array();
		
		public function __construct() {
			$this->element_array = array_fill(0, static::NUMBER_OF_ELEMENTS, new NonDefinedElement());
			$this->populate_array();
		}
		
		private function populate_array() {
			$this->add(13, new Aluminium());
		}
		
		private function add($number, $element) {
			if ($number > 0) {
				$this->element_array[$number - 1] = $element;
			}
		}
		
		public function get($number) {
			if (($number > 0) and ($number <= static::NUMBER_OF_ELEMENTS)) {
				$element = $this->element_array[$number - 1];
				
				if ($element != null) {
					return $element;
				}
			}
			return new NonDefinedElement();
		}
	}
	
	class Element {
		public $tag;
		public $name;
	}
	
	class NonDefinedElement extends Element {
		public function __construct() {
			$this->tag = null;
			$this->name = null;
		}
	}
	
	class Aluminium extends Element {
		public function __construct() {
			$this->tag = "aluminium";
			$this->name = "Alumīnijs";
		}
	}
?>