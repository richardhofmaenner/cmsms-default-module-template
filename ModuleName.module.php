<?php

/**
 * Basic template for CMS Made Simple modules
 *
 * @author Richard Hofmaenner
 * @contact Twitter @terillos
 * @contant Github github.com/richardhofmaenner
 */
class ModuleName extends CMSModule
{
    /**
     * Returns the name of the module
     *
     * @return string
     */
    public function GetName()
    {
        return 'ModuleName';
    }

    /**
     * Returns the friendly name of the module. Can be localized with the lang files
     *
     * @return string
     */
    public function GetFriendlyName()
    {
        return '';
    }
    
    /**
     * This function is used to register Parameters
     *
     * @return void
     */
    public function SetParameters()
    {
        $this->RegisterModulePlugin();
        $this->RestrictUnknownParams();

        $this->CreateParameter('param_name', 'default_value', 'help string', 'optional');
		$this->SetParameterType('quotes', CLEAN_INT);
    }
    
    /**
     * Returns the version from the module
     *
     * @return string
     */
    public function GetVersion()
    {
        return '0.1';
    }

    /**
     * Returns the help of the module
     *
     * @return string
     */
    public function GetHelp()
    {
        return 'Help message';
    }

    /**
     * Returns the author of the module
     *
     * @return string
     */
    public function GetAuthor()
    {
        return 'Your name';
    }

    /**
     * Returns the author email
     *
     * @return string
     */
    public function GetAuthorEmail()
    {
        return 'mail@example.com';
    }

    /**
     * Returns the changelog
     *
     * @return string
     */
    public function GetChangeLog()
    {
        return '';
    }

    /**
     * Returns if the module is a plugin
     *
     * @return boolean
     */
    public function IsPluginModule()
    {
        return true;
    }

    /**
     * Returns true if the module has a admin interface
     *
     * @return boolean
     */
    public function HasAdmin()
    {
        return true;
    }

    /**
     * Returns where the admin interface should be displayed in the backend
     *
     * @return string
     */
    public function GetAdminSection()
    {
        return 'extensions';
    }

    /**
     * Returns the admin description
     *
     * @return string
     */
    public function GetAdminDescription()
    {
        return '';
    }


    /**
     * Checks if the admin interface is visible to admin user
     *
     * @return boolean
     */
    public function VisibleToAdminUser()
    {
        return $this->CheckPermission('ModuleName Access');
    }
    
    /**
     * Returns the minimum required cms version
     *
     * @return string
     */
    public function MinimumCMSVersion()
    {
        return '1.6';
    }


    /**
     * Returns the maximum version of the cms
     *
     * @return string
     */
    public function MaximumCMSVersion()
    {
        return '1.11';
    }

    /**
     * Returns the message after installing the module
     *
     * @return string
     */
    public function InstallPostMessage()
    {
        return '';
    }

    /**
     * Returns the message after uninstalling the module (which will never happen)
     *
     * @return string
     */
    public function UninstallPostMessage()
    {
        return '';
    }

    /**
     * Returns the message before uninstalling the module
     *
     * @return string
     */
    public function UninstallPreMessage()
    {
        return '';
    }
}
