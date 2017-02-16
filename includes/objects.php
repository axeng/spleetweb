<?php

class News
{
	private $_name;
	private $_date;
	private $_author;

	public function __construct($name, $date, $author)
	{
		$this->_name = $name;
		$this->_date = $date;
		$this->_author = $author;
	}

	
}
?>