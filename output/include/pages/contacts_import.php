<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'Prenom',
'personne_physique',
'nom',
'adresse',
'tel',
'email',
'fax',
'date_creation',
'date_modif',
'etat',
'password',
'adresse2',
'state_prov',
'zip_code',
'city',
'country',
'authtype',
'type_contact' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Prenom' => array( 'import_field1' ),
'personne_physique' => array( 'import_field2' ),
'nom' => array( 'import_field3' ),
'adresse' => array( 'import_field4' ),
'tel' => array( 'import_field5' ),
'email' => array( 'import_field6' ),
'fax' => array( 'import_field7' ),
'date_creation' => array( 'import_field8' ),
'date_modif' => array( 'import_field9' ),
'etat' => array( 'import_field10' ),
'password' => array( 'import_field12' ),
'adresse2' => array( 'import_field13' ),
'state_prov' => array( 'import_field14' ),
'zip_code' => array( 'import_field15' ),
'city' => array( 'import_field16' ),
'country' => array( 'import_field17' ),
'authtype' => array( 'import_field18' ),
'type_contact' => array( 'import_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'Prenom',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'personne_physique',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'nom',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'adresse',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'tel',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'fax',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'date_creation',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'date_modif',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'etat',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'password',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'adresse2',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'state_prov',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'zip_code',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'city',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'country',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'authtype',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'type_contact',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>