<?php
// framework/test.php
use PHPUnit\Framework\TestCase

class IndexTest extends TestCase
{
	public function testHello()
	{
		$_GET['name'] = 'Nick';

		ob_start();
		include 'index.php';
		$content = ob_get_clean();

		$this->assertEquals('Hello Nick', $content);
	}
}
?>
