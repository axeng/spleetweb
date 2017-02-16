<?php

	class News
	{
		private $_name;
		private $_date;
		private $_author;
		private $_text;

		public function __construct()
		{
			$this->_name = "";
			$this->_date = "";
			$this->_author = "";
			$this->_text = "";
		}

		public function hydrate($donnees)
		{
		    foreach ($donnees as $attribut => $valeur)
		    {
		      $methode = 'set'.ucfirst($attribut);
		      
		      if (is_callable([$this, $methode]))
		      {
		        $this->$methode($valeur);
		      }
		    }
		}

		public function setName($name)
		{
			$this->_name = $name;
		}
		public function getName()
		{
			return $this->_name;
		}

		public function setDate($date)
		{
			$this->_date = $date;
		}
		public function getDate()
		{
			return $this->_date;
		}

		public function setAuthor($author)
		{
			$this->_author = $author;
		}
		public function getAuthor()
		{
			return $this->_author;
		}

		public function setText($text)
		{
			$this->_text = $text;
		}
		public function getText()
		{
			return $this->_text;
		}

		public function printNews()
		{
			echo "name : ".$this->_name."<br />";
			echo "date : ".$this->_date."<br />";
			echo "author : ".$this->_author."<br />";
			echo "text : ".$this->_text."<br />";
		}

		
	}
?>