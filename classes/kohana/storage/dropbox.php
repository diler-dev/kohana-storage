<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Dropbox driver for Storage Module
 * 
 * @package		Storage
 * @category	Base
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2011 Micheal Morgan
 * @license		MIT
 */
class Kohana_Storage_Dropbox extends Storage
{
	/**
	 * Default config
	 * 
	 * @access	protected
	 * @var		array
	 */
	protected $_config = array
	(
		'oauth_token'			=> NULL,
		'oauth_token_secret'	=> NULL
	);

	/**
	 * Protocol
	 * 
	 * @access	protected
	 * @var		string
	 */
	protected $_protocol = 'https';
	
	/**
	 * URL
	 * 
	 * @access	protected
	 * @var		string
	 */
	protected $_url = 'dropbox.com/1/';
	
	/**
	 * Make request
	 * 
	 * @access	protected
	 * @return	Response
	 */
	protected function _request($resource, $subdomain = 'api')
	{

		$url = $this->_protocol . '://' . $subdomain . '.' . $this->_url . $resource;

		$request = Request::factory($url);
		
		$request->client(Request_Client_External::factory(array(), 'Request_Client_Curl'));

		var_dump($request->execute()->body());exit;

	}
	
	/**
	 * Set
	 * 
	 * @access	protected
	 * @param	string
	 * @param	resource
	 * @param	string
	 * @return	void
	 */
	protected function _set($path, $handle, $mime)
	{
		$this->_request('account/info');
	}

	/**
	 * Get
	 * 
	 * @access	protected
	 * @param	string
	 * @param	resource
	 * @return	bool
	 */
	protected function _get($path, $handle)
	{
		return TRUE;
	}	
	
	/**
	 * Delete
	 * 
	 * @access	protected
	 * @param	string
	 * @return	bool
	 */
	protected function _delete($path)
	{

		return TRUE;
	}	
	
	/**
	 * Size
	 * 
	 * @access	protected
	 * @param	string
	 * @return	int
	 */
	protected function _size($path)
	{

	}	
	
	/**
	 * Whether or not file exists
	 * 
	 * @access	protected
	 * @param	string
	 * @return	bool
	 */
	protected function _exists($path)
	{

	}
	
	/**
	 * Get URL
	 * 
	 * @access	protected
	 * @param	string	Path of file 
	 * @param	string	Protocol to prefix to public URL
	 * @return	string
	 */
	protected function _url($path, $protocol)
	{

	}	
}