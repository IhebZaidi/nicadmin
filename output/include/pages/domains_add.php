<?php
			$optionsArray = array( 'details' => array( 'nameservers' => array( 'displayPreview' => 1 ),
'domain_contacts' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'code',
'domain',
'domainidn',
'ext',
'fsi',
'organisme',
'adresse',
'tel',
'fax',
'email',
'contact',
'activite',
'rubrique',
'date_recept',
'date_accept',
'date_activ',
'date_modif',
'date_annul',
'date_annul_due',
'etat',
'modif',
'commentaire',
'ns_modif',
'id_fsi_in',
'domain_pw',
'date_blocked',
'date_blocked_max',
'blocked_by',
'date_unblocked',
'date_transfer_req',
'date_transfer_due',
'date_transfer_canceled',
'date_transfer_accepted',
'date_transfer_rejected',
'date_annul_req',
'last_status',
'updated_by',
'private',
'mgmt',
'forward',
'dnssec',
'stat',
'in',
'change_prop',
'reg_annul_reason',
'reg_comment',
'reg_transfer_prohibited',
'reg_restore_prohibited' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'code' => array( 'integrated_edit_field' ),
'domain' => array( 'integrated_edit_field1' ),
'domainidn' => array( 'integrated_edit_field2' ),
'ext' => array( 'integrated_edit_field3' ),
'fsi' => array( 'integrated_edit_field4' ),
'organisme' => array( 'integrated_edit_field5' ),
'adresse' => array( 'integrated_edit_field6' ),
'tel' => array( 'integrated_edit_field7' ),
'fax' => array( 'integrated_edit_field8' ),
'email' => array( 'integrated_edit_field9' ),
'contact' => array( 'integrated_edit_field10' ),
'activite' => array( 'integrated_edit_field11' ),
'rubrique' => array( 'integrated_edit_field12' ),
'date_recept' => array( 'integrated_edit_field13' ),
'date_accept' => array( 'integrated_edit_field14' ),
'date_activ' => array( 'integrated_edit_field15' ),
'date_modif' => array( 'integrated_edit_field16' ),
'date_annul' => array( 'integrated_edit_field17' ),
'date_annul_due' => array( 'integrated_edit_field18' ),
'etat' => array( 'integrated_edit_field19' ),
'modif' => array( 'integrated_edit_field20' ),
'commentaire' => array( 'integrated_edit_field21' ),
'ns_modif' => array( 'integrated_edit_field22' ),
'id_fsi_in' => array( 'integrated_edit_field23' ),
'domain_pw' => array( 'integrated_edit_field24' ),
'date_blocked' => array( 'integrated_edit_field25' ),
'date_blocked_max' => array( 'integrated_edit_field26' ),
'blocked_by' => array( 'integrated_edit_field27' ),
'date_unblocked' => array( 'integrated_edit_field28' ),
'date_transfer_req' => array( 'integrated_edit_field29' ),
'date_transfer_due' => array( 'integrated_edit_field30' ),
'date_transfer_canceled' => array( 'integrated_edit_field31' ),
'date_transfer_accepted' => array( 'integrated_edit_field32' ),
'date_transfer_rejected' => array( 'integrated_edit_field33' ),
'date_annul_req' => array( 'integrated_edit_field34' ),
'last_status' => array( 'integrated_edit_field35' ),
'updated_by' => array( 'integrated_edit_field36' ),
'private' => array( 'integrated_edit_field37' ),
'mgmt' => array( 'integrated_edit_field38' ),
'forward' => array( 'integrated_edit_field39' ),
'dnssec' => array( 'integrated_edit_field40' ),
'stat' => array( 'integrated_edit_field41' ),
'in' => array( 'integrated_edit_field42' ),
'change_prop' => array( 'integrated_edit_field43' ),
'reg_annul_reason' => array( 'integrated_edit_field44' ),
'reg_comment' => array( 'integrated_edit_field45' ),
'reg_transfer_prohibited' => array( 'integrated_edit_field46' ),
'reg_restore_prohibited' => array( 'integrated_edit_field47' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ),
'top' => array( 'add_header' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'add_header' => 'top',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field20' => 'grid',
'integrated_edit_field21' => 'grid',
'integrated_edit_field22' => 'grid',
'integrated_edit_field23' => 'grid',
'integrated_edit_field24' => 'grid',
'integrated_edit_field25' => 'grid',
'integrated_edit_field26' => 'grid',
'integrated_edit_field27' => 'grid',
'integrated_edit_field28' => 'grid',
'integrated_edit_field29' => 'grid',
'integrated_edit_field30' => 'grid',
'integrated_edit_field31' => 'grid',
'integrated_edit_field32' => 'grid',
'integrated_edit_field33' => 'grid',
'integrated_edit_field34' => 'grid',
'integrated_edit_field35' => 'grid',
'integrated_edit_field36' => 'grid',
'integrated_edit_field37' => 'grid',
'integrated_edit_field38' => 'grid',
'integrated_edit_field39' => 'grid',
'integrated_edit_field40' => 'grid',
'integrated_edit_field41' => 'grid',
'integrated_edit_field42' => 'grid',
'integrated_edit_field43' => 'grid',
'integrated_edit_field44' => 'grid',
'integrated_edit_field45' => 'grid',
'integrated_edit_field46' => 'grid',
'integrated_edit_field47' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field21' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field22' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field23' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field24' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field25' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field26' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field27' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field28' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field29' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field30' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field31' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field32' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field33' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field34' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field35' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field36' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field37' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field38' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field39' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field40' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field41' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field42' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field43' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field44' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field45' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field46' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field47' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
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
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_reset' => array( 'type' => 'add_reset' ),
'integrated_edit_field' => array( 'field' => 'code',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'domain',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'domainidn',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'ext',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'fsi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'organisme',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'adresse',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'tel',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'fax',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'email',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'contact',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'activite',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'rubrique',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'date_recept',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'date_accept',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'date_activ',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'date_modif',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'date_annul',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'date_annul_due',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'etat',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'modif',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'commentaire',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'ns_modif',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'id_fsi_in',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'domain_pw',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'date_blocked',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'date_blocked_max',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field27' => array( 'field' => 'blocked_by',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field28' => array( 'field' => 'date_unblocked',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'date_transfer_req',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'date_transfer_due',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field31' => array( 'field' => 'date_transfer_canceled',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field32' => array( 'field' => 'date_transfer_accepted',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field33' => array( 'field' => 'date_transfer_rejected',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field34' => array( 'field' => 'date_annul_req',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'last_status',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field36' => array( 'field' => 'updated_by',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field37' => array( 'field' => 'private',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field38' => array( 'field' => 'mgmt',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field39' => array( 'field' => 'forward',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field40' => array( 'field' => 'dnssec',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field41' => array( 'field' => 'stat',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field42' => array( 'field' => 'in',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field43' => array( 'field' => 'change_prop',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field44' => array( 'field' => 'reg_annul_reason',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field45' => array( 'field' => 'reg_comment',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field46' => array( 'field' => 'reg_transfer_prohibited',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field47' => array( 'field' => 'reg_restore_prohibited',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'nameservers',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>