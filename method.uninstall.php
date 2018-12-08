<?php
/**
 * Method to uninstall the module
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

$sqlarray1 = $dict->DropTableSQL(cms_db_prefix()."module_moduleName");
$dict->ExecuteSQLArray($sqlarray1);

$this->RemovePermission('ModuleName permission');

$this->Audit(0, 'Module Name', 'Message');
