<?php

namespace HBM\auth_server;

use \HBM\HBM_Root;

// Include the necessary HBM and other files
// require_once HBM_MAIN_UTIL_PATH . 'classes/class-hbm-root.php'; // Root class template
// require_once HBM_MAIN_UTIL_PATH . 'gatekeeper.php'; // Visit class template

class HBM_Auth_Server extends HBM_Root
{
    private $admin;
    private $callback_handler;
    private $callback_initiate;
    private $callback_set_sso;
    private $callback_logout;

    public function __construct()
    {
        parent::__construct(__NAMESPACE__);
    }

    function init_plugin()
    {

        // require_once HBM_PLUGIN_PATH . 'admin/class-hbm-auth-admin.php'; // Admin-related functionality
        $this->admin = HBM_Server_Auth_Admin::HBM()::get_instance();

        $this->callback_handler = HBM_Callback_Handler::HBM()::get_instance();
        $this->callback_initiate = HBM_Callback_Initiate::HBM()::get_instance();
        $this->callback_set_sso = HBM_Callback_Set_Sso::HBM()::get_instance();
        $this->callback_logout = HBM_Callback_Logout::HBM()::get_instance();
    }

    function fastlane()
    {
    }
}
