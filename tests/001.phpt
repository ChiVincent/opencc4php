--TEST--
Check for opencc presence
--FILE--
<?php 
echo extension_loaded('opencc')
  ? "opencc extension is available"
  : "opencc extension is not avalable";
--EXPECT--
opencc extension is available
