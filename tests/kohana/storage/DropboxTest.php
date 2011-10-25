<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');
/**
 * Tests Storage
 *
 * @group		storage.dropbox
 * @package		Storage
 * @category	Tests
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2011 Micheal Morgan
 * @license		MIT
 */
class Kohana_Storage_DropboxTest extends Kohana_StorageTest
{	
	/**
	 * Verify internet and Dropbox has required configuration
	 * 
	 * @access	protected
	 * @return	void
	 */
	public function setUp()
    {
    	parent::setUp();
    	
    	$config = Kohana::$config->load('storage.dropbox');
    	
        if ( ! $this->hasInternet() || ! $config['oauth_token'] || ! $config['oauth_token_secret'])
        {
            $this->markTestSkipped('Storage Dropbox driver is not configured.');
        }
    }
    
    /**
     * Factory using Dropbox configuration
     * 
     * @access	public
     * @return	Storage_Dropbox
     */
    public function factory()
    {
    	return Storage::factory('dropbox');
    }
}