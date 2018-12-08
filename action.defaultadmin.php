<?php

/**
 * Default action for admin
 */

if (!isset($gCms)) {
    exit;
}

if (!$this->CheckPermission('ModuleName permission')) {
    return $this->DisplayErrorPage($id, $params, $returnid, 'Error message');
}

if (!empty($params['active_tab'])) {
    $tab = $params['active_tab'];
} else {
    $tab = '';
}

echo $this->StartTabHeaders();
    echo $this->SetTabHeader('tab1', 'tab1 title', ('tab1' == $tab)?true:false);
    echo $this->SetTabHeader('tab2', 'tab2 title', ('tab2' == $tab)?true:false);
echo $this->EndTabHeaders();

echo $this->StartTabContent();
    echo $this->StartTab('tab1');
        include(dirname(__FILE__).'/function.tab1.php');
    echo $this->EndTab();
    echo $this->StartTab('tab2');
        include(dirname(__FILE__).'/function.tab2.php');
    echo $this->EndTab();
echo $this->EndTabContent();
