<?php
$tdatanameservers = array();
$tdatanameservers[".searchableFields"] = array();
$tdatanameservers[".ShortName"] = "nameservers";
$tdatanameservers[".OwnerID"] = "domain_id";
$tdatanameservers[".OriginalTable"] = "nameservers";


$tdatanameservers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanameservers[".originalPagesByType"] = $tdatanameservers[".pagesByType"];
$tdatanameservers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanameservers[".originalPages"] = $tdatanameservers[".pages"];
$tdatanameservers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanameservers[".originalDefaultPages"] = $tdatanameservers[".defaultPages"];

//	field labels
$fieldLabelsnameservers = array();
$fieldToolTipsnameservers = array();
$pageTitlesnameservers = array();
$placeHoldersnameservers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnameservers["English"] = array();
	$fieldToolTipsnameservers["English"] = array();
	$placeHoldersnameservers["English"] = array();
	$pageTitlesnameservers["English"] = array();
	$fieldLabelsnameservers["English"]["ttl"] = "Ttl";
	$fieldToolTipsnameservers["English"]["ttl"] = "";
	$placeHoldersnameservers["English"]["ttl"] = "";
	$fieldLabelsnameservers["English"]["nameserver"] = "Nameserver";
	$fieldToolTipsnameservers["English"]["nameserver"] = "";
	$placeHoldersnameservers["English"]["nameserver"] = "";
	$fieldLabelsnameservers["English"]["domain"] = "Domain";
	$fieldToolTipsnameservers["English"]["domain"] = "";
	$placeHoldersnameservers["English"]["domain"] = "";
	if (count($fieldToolTipsnameservers["English"]))
		$tdatanameservers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsnameservers["Arabic"] = array();
	$fieldToolTipsnameservers["Arabic"] = array();
	$placeHoldersnameservers["Arabic"] = array();
	$pageTitlesnameservers["Arabic"] = array();
	$fieldLabelsnameservers["Arabic"]["ttl"] = "Ttl";
	$fieldToolTipsnameservers["Arabic"]["ttl"] = "";
	$placeHoldersnameservers["Arabic"]["ttl"] = "";
	$fieldLabelsnameservers["Arabic"]["nameserver"] = "Nameserver";
	$fieldToolTipsnameservers["Arabic"]["nameserver"] = "";
	$placeHoldersnameservers["Arabic"]["nameserver"] = "";
	$fieldLabelsnameservers["Arabic"]["domain"] = "Domain";
	$fieldToolTipsnameservers["Arabic"]["domain"] = "";
	$placeHoldersnameservers["Arabic"]["domain"] = "";
	if (count($fieldToolTipsnameservers["Arabic"]))
		$tdatanameservers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsnameservers["French"] = array();
	$fieldToolTipsnameservers["French"] = array();
	$placeHoldersnameservers["French"] = array();
	$pageTitlesnameservers["French"] = array();
	$fieldLabelsnameservers["French"]["ttl"] = "Ttl";
	$fieldToolTipsnameservers["French"]["ttl"] = "";
	$placeHoldersnameservers["French"]["ttl"] = "";
	$fieldLabelsnameservers["French"]["nameserver"] = "Nameserver";
	$fieldToolTipsnameservers["French"]["nameserver"] = "";
	$placeHoldersnameservers["French"]["nameserver"] = "";
	$fieldLabelsnameservers["French"]["domain"] = "Domain";
	$fieldToolTipsnameservers["French"]["domain"] = "";
	$placeHoldersnameservers["French"]["domain"] = "";
	if (count($fieldToolTipsnameservers["French"]))
		$tdatanameservers[".isUseToolTips"] = true;
}


	$tdatanameservers[".NCSearch"] = true;



$tdatanameservers[".shortTableName"] = "nameservers";
$tdatanameservers[".nSecOptions"] = 0;

$tdatanameservers[".mainTableOwnerID"] = "domain_id";
$tdatanameservers[".entityType"] = 0;
$tdatanameservers[".connId"] = "nicadmin_at_localhost";


$tdatanameservers[".strOriginalTableName"] = "nameservers";

	



$tdatanameservers[".showAddInPopup"] = false;

$tdatanameservers[".showEditInPopup"] = false;

$tdatanameservers[".showViewInPopup"] = false;

$tdatanameservers[".listAjax"] = false;
//	temporary
//$tdatanameservers[".listAjax"] = false;

	$tdatanameservers[".audit"] = false;

	$tdatanameservers[".locking"] = false;


$pages = $tdatanameservers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanameservers[".edit"] = true;
	$tdatanameservers[".afterEditAction"] = 1;
	$tdatanameservers[".closePopupAfterEdit"] = 1;
	$tdatanameservers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanameservers[".add"] = true;
$tdatanameservers[".afterAddAction"] = 1;
$tdatanameservers[".closePopupAfterAdd"] = 1;
$tdatanameservers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanameservers[".list"] = true;
}



$tdatanameservers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanameservers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanameservers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanameservers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanameservers[".printFriendly"] = true;
}



$tdatanameservers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanameservers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanameservers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanameservers[".isUseAjaxSuggest"] = true;





$tdatanameservers[".ajaxCodeSnippetAdded"] = false;

$tdatanameservers[".buttonsAdded"] = false;

$tdatanameservers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanameservers[".isUseTimeForSearch"] = false;


$tdatanameservers[".badgeColor"] = "d2af80";


$tdatanameservers[".allSearchFields"] = array();
$tdatanameservers[".filterFields"] = array();
$tdatanameservers[".requiredSearchFields"] = array();

$tdatanameservers[".googleLikeFields"] = array();
$tdatanameservers[".googleLikeFields"][] = "ttl";
$tdatanameservers[".googleLikeFields"][] = "nameserver";
$tdatanameservers[".googleLikeFields"][] = "domain";



$tdatanameservers[".tableType"] = "list";

$tdatanameservers[".printerPageOrientation"] = 0;
$tdatanameservers[".nPrinterPageScale"] = 100;

$tdatanameservers[".nPrinterSplitRecords"] = 40;

$tdatanameservers[".geocodingEnabled"] = false;










$tdatanameservers[".pageSize"] = 20;

$tdatanameservers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanameservers[".strOrderBy"] = $tstrOrderBy;

$tdatanameservers[".orderindexes"] = array();


$tdatanameservers[".sqlHead"] = "SELECT nameservers.ttl,  nameservers.nameserver,  domains.`domain`";
$tdatanameservers[".sqlFrom"] = "FROM nameservers  INNER JOIN domains ON nameservers.domain_id = domains.id";
$tdatanameservers[".sqlWhereExpr"] = "";
$tdatanameservers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanameservers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanameservers[".arrGroupsPerPage"] = $arrGPP;

$tdatanameservers[".highlightSearchResults"] = true;

$tableKeysnameservers = array();
$tableKeysnameservers[] = "nameserver";
$tdatanameservers[".Keys"] = $tableKeysnameservers;


$tdatanameservers[".hideMobileList"] = array();




//	ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ttl";
	$fdata["GoodName"] = "ttl";
	$fdata["ownerTable"] = "nameservers";
	$fdata["Label"] = GetFieldLabel("nameservers","ttl");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ttl";

		$fdata["sourceSingle"] = "ttl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nameservers.ttl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=14";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanameservers["ttl"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "ttl";
//	nameserver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nameserver";
	$fdata["GoodName"] = "nameserver";
	$fdata["ownerTable"] = "nameservers";
	$fdata["Label"] = GetFieldLabel("nameservers","nameserver");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nameserver";

		$fdata["sourceSingle"] = "nameserver";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nameservers.nameserver";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hosts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "host_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "hostname";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanameservers["nameserver"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "nameserver";
//	domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domain";
	$fdata["GoodName"] = "domain";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("nameservers","domain");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domain";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domains.`domain`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanameservers["domain"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "domain";


$tables_data["nameservers"]=&$tdatanameservers;
$field_labels["nameservers"] = &$fieldLabelsnameservers;
$fieldToolTips["nameservers"] = &$fieldToolTipsnameservers;
$placeHolders["nameservers"] = &$placeHoldersnameservers;
$page_titles["nameservers"] = &$pageTitlesnameservers;


changeTextControlsToDate( "nameservers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nameservers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nameservers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nameservers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nameservers.ttl,  nameservers.nameserver,  domains.`domain`";
$proto0["m_strFrom"] = "FROM nameservers  INNER JOIN domains ON nameservers.domain_id = domains.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl",
	"m_strTable" => "nameservers",
	"m_srcTableName" => "nameservers"
));

$proto6["m_sql"] = "nameservers.ttl";
$proto6["m_srcTableName"] = "nameservers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nameserver",
	"m_strTable" => "nameservers",
	"m_srcTableName" => "nameservers"
));

$proto8["m_sql"] = "nameservers.nameserver";
$proto8["m_srcTableName"] = "nameservers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domain",
	"m_strTable" => "domains",
	"m_srcTableName" => "nameservers"
));

$proto10["m_sql"] = "domains.`domain`";
$proto10["m_srcTableName"] = "nameservers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "nameservers";
$proto13["m_srcTableName"] = "nameservers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "domain_id";
$proto13["m_columns"][] = "ttl";
$proto13["m_columns"][] = "nameserver";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "nameservers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "nameservers";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "domains";
$proto17["m_srcTableName"] = "nameservers";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "code";
$proto17["m_columns"][] = "domain";
$proto17["m_columns"][] = "domainidn";
$proto17["m_columns"][] = "ext";
$proto17["m_columns"][] = "fsi";
$proto17["m_columns"][] = "organisme";
$proto17["m_columns"][] = "adresse";
$proto17["m_columns"][] = "tel";
$proto17["m_columns"][] = "fax";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "contact";
$proto17["m_columns"][] = "activite";
$proto17["m_columns"][] = "rubrique";
$proto17["m_columns"][] = "date_recept";
$proto17["m_columns"][] = "date_accept";
$proto17["m_columns"][] = "date_activ";
$proto17["m_columns"][] = "date_modif";
$proto17["m_columns"][] = "date_annul";
$proto17["m_columns"][] = "date_annul_due";
$proto17["m_columns"][] = "etat";
$proto17["m_columns"][] = "modif";
$proto17["m_columns"][] = "commentaire";
$proto17["m_columns"][] = "ns_modif";
$proto17["m_columns"][] = "id_fsi_in";
$proto17["m_columns"][] = "domain_pw";
$proto17["m_columns"][] = "date_blocked";
$proto17["m_columns"][] = "date_blocked_max";
$proto17["m_columns"][] = "blocked_by";
$proto17["m_columns"][] = "date_unblocked";
$proto17["m_columns"][] = "date_transfer_req";
$proto17["m_columns"][] = "date_transfer_due";
$proto17["m_columns"][] = "date_transfer_canceled";
$proto17["m_columns"][] = "date_transfer_accepted";
$proto17["m_columns"][] = "date_transfer_rejected";
$proto17["m_columns"][] = "date_annul_req";
$proto17["m_columns"][] = "last_status";
$proto17["m_columns"][] = "updated_by";
$proto17["m_columns"][] = "private";
$proto17["m_columns"][] = "mgmt";
$proto17["m_columns"][] = "forward";
$proto17["m_columns"][] = "dnssec";
$proto17["m_columns"][] = "stat";
$proto17["m_columns"][] = "in";
$proto17["m_columns"][] = "change_prop";
$proto17["m_columns"][] = "reg_annul_reason";
$proto17["m_columns"][] = "reg_comment";
$proto17["m_columns"][] = "reg_transfer_prohibited";
$proto17["m_columns"][] = "reg_restore_prohibited";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN domains ON nameservers.domain_id = domains.id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "nameservers";
$proto18=array();
$proto18["m_sql"] = "domains.id = nameservers.domain_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "domains",
	"m_srcTableName" => "nameservers"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= nameservers.domain_id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="nameservers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nameservers = createSqlQuery_nameservers();


	
		;

			

$tdatanameservers[".sqlquery"] = $queryData_nameservers;



$tdatanameservers[".hasEvents"] = false;

?>