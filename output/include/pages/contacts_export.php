<?php
			$optionsArray = array( 'totals' => array( 'Prenom' => array( 'totalsType' => '' ),
'personne_physique' => array( 'totalsType' => '' ),
'nom' => array( 'totalsType' => '' ),
'adresse' => array( 'totalsType' => '' ),
'tel' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'fax' => array( 'totalsType' => '' ),
'date_creation' => array( 'totalsType' => '' ),
'date_modif' => array( 'totalsType' => '' ),
'etat' => array( 'totalsType' => '' ),
'id_fsi' => array( 'totalsType' => '' ),
'password' => array( 'totalsType' => '' ),
'adresse2' => array( 'totalsType' => '' ),
'state_prov' => array( 'totalsType' => '' ),
'zip_code' => array( 'totalsType' => '' ),
'city' => array( 'totalsType' => '' ),
'country' => array( 'totalsType' => '' ),
'authtype' => array( 'totalsType' => '' ),
'id' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Prenom',
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
'authtype' ),
'exportFields' => array( 'Prenom',
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
'authtype' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Prenom' => array( 'export_field1' ),
'personne_physique' => array( 'export_field2' ),
'nom' => array( 'export_field3' ),
'adresse' => array( 'export_field4' ),
'tel' => array( 'export_field5' ),
'email' => array( 'export_field6' ),
'fax' => array( 'export_field7' ),
'date_creation' => array( 'export_field8' ),
'date_modif' => array( 'export_field9' ),
'etat' => array( 'export_field10' ),
'password' => array( 'export_field12' ),
'adresse2' => array( 'export_field13' ),
'state_prov' => array( 'export_field14' ),
'zip_code' => array( 'export_field15' ),
'city' => array( 'export_field16' ),
'country' => array( 'export_field17' ),
'authtype' => array( 'export_field18' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_field18' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'Prenom',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'personne_physique',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'nom',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'adresse',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'tel',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'email',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'fax',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'date_creation',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'date_modif',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'etat',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'password',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'adresse2',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'state_prov',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'zip_code',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'city',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'country',
'type' => 'export_field' ),
'export_field18' => array( 'field' => 'authtype',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>