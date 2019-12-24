<?php
namespace Test\Library;
/**
 * 
 */
class Test
{
	private $params = [];
	public function __construct(Array $params)
	{
		if (count($params) > 0) {
			$this->params = $params;
		}
		
	}
	public function getParams(){
		return $this->params;
	}
}