<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => null,
'fullnameField' => 'nom',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'table' => array( 'connId' => 'nicadmin_at_localhost',
'table' => 'fsi' ),
'usernameField' => 'login',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'jKuu8u8dlKOCXxkwnFee',
'JWTSecret' => 'gbYAAtmD1dR2jmWMCmjW' ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 0,
'hashAlgorithm' => 0,
'registerPage' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => '',
'usePHPDefinedSMTP' => false,
'useBuiltInMailer' => false,
'SMTPServer' => 'localhost',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false,
'tables' => array( 'contacts' => array( 'mainOwnerIDField' => 'id_fsi',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'domain_contacts' => array( 'mainOwnerIDField' => 'id_domain',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'domain_status' => array( 'mainOwnerIDField' => 'id_status',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'domains' => array( 'mainOwnerIDField' => 'fsi',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'extensions' => array( 'mainOwnerIDField' => 'id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'fsi' => array( 'mainOwnerIDField' => 'id_fsi',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'fsi_extensions' => array( 'mainOwnerIDField' => 'id_fsi',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'fsi_ns' => array( 'mainOwnerIDField' => 'id_fsi',
'securityOption' => 0,
'userOwnerIDField' => 'id_fsi' ),
'hosts' => array( 'mainOwnerIDField' => 'host_id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'hosts_ip' => array( 'mainOwnerIDField' => 'id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'ip' => array( 'mainOwnerIDField' => 'id_ip',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'late_domains' => array( 'mainOwnerIDField' => 'fsi',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'nameservers' => array( 'mainOwnerIDField' => 'domain_id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'termes' => array( 'mainOwnerIDField' => 'id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ),
'termes_deleted' => array( 'mainOwnerIDField' => 'id',
'securityOption' => 1,
'userOwnerIDField' => 'id_fsi' ) ) ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => '',
'table' => '' ),
'lockingTable' => array( 'connId' => '',
'table' => '' ),
'tables' => array(  ),
'loggingMode' => 0,
'loggingFile' => 'audit.log',
'logSecurityActions' => false,
'lockAfterUnsuccessfulLogin' => false,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array(  ),
'twoFactorField' => '',
'emailField' => '',
'phoneField' => '',
'codeField' => '',
'projectName' => '' ),
'projectName' => 'nicadmin1',
'loginDataSource' => 'fsi',
'loginForm' => 0,
'dynamicPermissions' => false,
'dpTablePrefix' => '',
'dpTableConnId' => '',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => null,
'fullnameField' => 'nom',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'table' => array( 'connId' => 'nicadmin_at_localhost',
'table' => 'fsi' ),
'usernameField' => 'login',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array(  ) );
?>