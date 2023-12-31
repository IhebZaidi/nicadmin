<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => false,
'welcomeItems' => array( 'image' => array( 'menutItem' => false ),
'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'contacts',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'fsi',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'domain_contacts',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'domains',
'page' => 'list' ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'fsi_extensions',
'page' => 'list' ),
'welcome_item7' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'fsi_ns',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'nameservers',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'image' ),
'supertop' => array( 'logo',
'menu',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item4',
'welcome_item6',
'welcome_item7',
'welcome_item3' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'image' => 'above-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid',
'welcome_item4' => 'grid',
'welcome_item6' => 'grid',
'welcome_item7' => 'grid',
'welcome_item3' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3,
'list_options' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item6',
'welcome_item7' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'image' => array( 'image' ),
'list_options' => array( 'list_options' ),
'lang_selector' => array( 'lang_selector' ),
'changepassword_link' => array( 'changepassword_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => true ) ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item4',
'welcome_item6',
'welcome_item7',
'welcome_item3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo',
'logo' => array( 'table' => null,
'type' => 8 ) ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'contacts',
'linkPage' => 'list',
'linkText' => array( 'table' => 'contacts',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Contacts description',
'type' => 0 ),
'background' => '#9ACD32',
'linkType' => 0 ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'fsi',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Profile' ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Fsi description',
'type' => 0 ),
'background' => '#D2691E',
'linkType' => 0 ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'domain_contacts',
'linkPage' => 'list',
'linkText' => array( 'table' => 'domain_contacts',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'headphones' ),
'linkComments' => array( 'text' => 'Domain Contacts description',
'type' => 0 ),
'background' => '#EDCA00',
'linkType' => 0 ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'nameservers',
'linkPage' => 'list',
'linkText' => array( 'table' => 'nameservers',
'type' => 6 ),
'background' => '#D2AF80',
'linkType' => 0 ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'domains',
'linkPage' => 'list',
'linkText' => array( 'table' => 'domains',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Domains description',
'type' => 0 ),
'background' => '#8FBC8B',
'linkType' => 0 ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'fsi_extensions',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Profile Extensions' ),
'linkIcon' => array( 'glyph' => 'earphone' ),
'background' => '#B22222',
'linkType' => 0 ),
'welcome_item7' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'fsi_ns',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Profile Ns' ),
'background' => '#2F4F4F',
'linkType' => 0 ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'ATI-Tunisie-Internet-logo-2020-Fr-color.png',
'source' => 2 ),
'mobileDisplay' => '' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'lang_selector' ) ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'welcomePageStay' => true,
'listTotals' => 1 );
		?>