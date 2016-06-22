<?php
	class Encryption
		{
			public	static	$engine;
			
			private	function __construct()
				{
				}
			
			public	static	function Decrypt($value = false,$salt = false)
				{
					if(empty($salt) || empty($value))
						return false;
					
					if(!isset(self::$engine))
						self::$engine	=	new Cryptor();
					
					return (!function_exists("mcrypt_get_iv_size"))? openssl_decrypt($value,'AES-256-CBC',NubeData::$settings->engine->openssl_salt,true,NubeData::$settings->engine->openssl_iv) : self::$engine->decrypt($value,$salt);
				}
			
			public	static	function Encrypt($value = false,$salt = false)
				{
					if(empty($salt) || empty($value))
						return false;
					
					if(!isset(self::$engine))
						self::$engine	=	new Cryptor();
					
					return (!function_exists("mcrypt_get_iv_size"))? openssl_encrypt($value,'AES-256-CBC',NubeData::$settings->engine->openssl_salt,true,NubeData::$settings->engine->openssl_iv) : self::$engine->encrypt($value,$salt);
				}
		}