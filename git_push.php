<?php
$result = exec('git status && git add --all && git commit -m "19_may2" && git push && git tag "19_may2" && git push --tags',$output);
echo json_encode($output);
?>