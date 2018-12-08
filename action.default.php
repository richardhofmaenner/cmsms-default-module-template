<?php

/**
 * Default action
 * 
 * @author Richard Hofmaenner
 * @contact Twitter @terillos
 * @contant Github github.com/richardhofmaenner
 */

if (!isset($gCms)) {
    exit;
}
$db = $gCms->GetDb();

echo $this->ProcessTemplate('display.tpl');

?>