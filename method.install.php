<?php

/**
 * Method to install the module in the cms
 *
 * @author Richard Hofmaenner
 * @contact Twitter @terillos
 * @contant Github github.com/richardhofmaenner
 */

if (!isset($gCms)) {
    exit;
}

$db = $gCms->GetDb();

$taboptarray = array('mysql' => 'ENGINE=MyISAM');

$dict = NewDataDictionary($db);

$flds1 = "";
            
$sqlarray1 = $dict->CreateTableSQL(
    cms_db_prefix()."module_moduleName",
                   $flds1,
                   $taboptarray
);
$dict->ExecuteSQLArray($sqlarray1);

$this->CreatePermission('ModuleName permission');

$this->Audit(0, 'Module Name', 'Message');
