<?php

namespace Trivial\Core;

class App{

	protected static $containers = [];

	public static function bind($name, $object)
	{	

		static::$containers[$name] = $object;

	}


	public static function get($name)
	{
		  if (array_key_exists($name, static::$containers)) {
            return static::$containers[$name];
        }

         throw new \Exception('Cannot resolve the given class', 1);
         
	}


}