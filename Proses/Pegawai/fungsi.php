<?php 
function FirstDecisionMaker($lepel)
{
	if ($lepel == 'Admin') {
        echo "<style>#show{display:block;}</style>";
    }
    elseif ($lepel == 'User') {
        echo "<style>#show{display:none;}</style>";
    }
}
?>