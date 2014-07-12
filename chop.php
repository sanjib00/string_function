<?php
echo "<pre>";//without <pre> we cann't see desired output in your browser
echo chop("   Ramki   ");//right spaces are eliminated
echo chop("Ramkrishna", "a..z");
echo "</pre>";
?>