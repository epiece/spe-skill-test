<a href="index.php">Kembali</a>
<br>
<br>
<?php

// need a true/false return if a needle is found.
echo $haystack = "This function should return 1 as the index of the needle (blue)"; // haystack
$needles = array("red", "blue", "yellow", "black", "grey"); // needles

foreach ($needles as $key => $val) {
    // echo $val;
    if (stristr($haystack, $val)) {
		echo "<br>";
		echo "found ".$val;
        // do something
    }
}