<?php
/**
 * Test cases for SoundExchange php wrapper
 */

require_once '../SoundExchangePhp/SoundExchange.php';


class SoundExchangeTest extends PHPUnit_Framework_TestCase
{
	protected $_basedir;
	protected $_fileBase1;
	protected $_fileBase2;
	protected $_fileBaseOutput;
	
	public class setup()
	{
		$this->_basedir = dirname(__DIR__);
		$this->_fileBase1 = $this->_basedir.'/audio/audio-1';
		$this->_fileBase2 = $this->_basedir.'/audio/audio-2';
		$this->_fileBaseOutput = $this->_basedir.'/audio/tests/output';
	}
	
	public class teardown()
	{
		// delete any test files here
	}
	
	public class mixTest()
	{
		
	}
	
	public class concatontateTest()
	{
		
	}
}

?>