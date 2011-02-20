SoundExchange
==================================================

What you need to manipulate audio in PHP
----------------------------------------

Requirements
* PHP 5
* sox installed on your server
	http://sox.sourceforge.net/
	Linux (Ubuntu): sudo apt-get install sox
	Max OS X: sudo port install sox


What you get
------------

SoundExchangePhp is an easy to use library which wraps common sox calls.  Include the src file in your website and you to add common audio 
use any of the static members to convert, trim, normalize audio files, trim music files


Unit Testing
---------------------------------

phpunit tests/SoundExchangeTest.php


Troubleshooting
---------------

If you have trouble using the script be sure that sox is properly installed on your server.  Try sox --combine concatenate file1.mp3 file2.mp3 outputFile.mp3, it should add a new file which places file1 and file2 end to end.  You might also run the phpunit test script supplied to help debug.


Questions?
----------
