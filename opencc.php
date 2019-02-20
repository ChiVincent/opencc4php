<?php
$newLine = (php_sapi_name() == 'cli')
    ? "\n"
    :'br';

if(!extension_loaded('opencc')) {
	dl('opencc.' . PHP_SHLIB_SUFFIX);
}

$functions = get_extension_funcs('opencc');
echo "Functions available in the test extension: $newLine";
foreach($functions as $func) {
    echo $func . $newLine;
}
echo $newLine;

$od = opencc_open('s2twp.json');
echo opencc_convert("我的鼠标哪儿去了？", $od) . $newLine;
echo opencc_error() . $newLine;
var_dump(opencc_close($od));
