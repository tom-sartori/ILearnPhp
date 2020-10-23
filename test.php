<?php
echo "blaa";

$output = shell_exec('which git 2>&1');
echo "<pre>$output</pre>";

$output = shell_exec('/usr/bin/git status 2>&1');
echo "<pre>$output</pre>";
?>