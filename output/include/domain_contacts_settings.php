<?php
$tdatadomain_contacts = array();
$tdatadomain_contacts[".searchableFields"] = array();
$tdatadomain_contacts[".ShortName"] = "domain_contacts";
$tdatadomain_contacts[".OwnerID"] = "id_contact";
$tdatadomain_contacts[".OriginalTable"] = "domain_contacts";


$tdatadomain_contacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadomain_contacts[".originalPagesByType"] = $tdatadomain_contacts[".pagesByType"];
$tdatadomain_contacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadomain_contacts[".originalPages"] = $tdatadomain_contacts[".pages"];
$tdatadomain_contacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadomain_contacts[".originalDefaultPages"] = $tdatadomain_contacts[".defaultPages"];

//	field labels
$fieldLabelsdomain_contacts = array();
$fieldToolTipsdomain_contacts = array();
$pageTitlesdomain_contacts = array();
$placeHoldersdomain_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdomain_contacts["English"] = array();
	$fieldToolTipsdomain_contacts["English"] = array();
	$placeHoldersdomain_contacts["English"] = array();
	$pageTitlesdomain_contacts["English"] = array();
	$fieldLabelsdomain_contacts["English"]["type_contact"] = "Type Contact";
	$fieldToolTipsdomain_contacts["English"]["type_contact"] = "";
	$placeHoldersdomain_contacts["English"]["type_contact"] = "";
	$fieldLabelsdomain_contacts["English"]["domain"] = "Domain";
	$fieldToolTipsdomain_contacts["English"]["domain"] = "";
	$placeHoldersdomain_contacts["English"]["domain"] = "";
	$fieldLabelsdomain_contacts["English"]["nom"] = "Nom";
	$fieldToolTipsdomain_contacts["English"]["nom"] = "";
	$placeHoldersdomain_contacts["English"]["nom"] = "";
	if (count($fieldToolTipsdomain_contacts["English"]))
		$tdatadomain_contacts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsdomain_contacts["Arabic"] = array();
	$fieldToolTipsdomain_contacts["Arabic"] = array();
	$placeHoldersdomain_contacts["Arabic"] = array();
	$pageTitlesdomain_contacts["Arabic"] = array();
	$fieldLabelsdomain_contacts["Arabic"]["type_contact"] = "Type Contact";
	$fieldToolTipsdomain_contacts["Arabic"]["type_contact"] = "";
	$placeHoldersdomain_contacts["Arabic"]["type_contact"] = "";
	$fieldLabelsdomain_contacts["Arabic"]["domain"] = "Domain";
	$fieldToolTipsdomain_contacts["Arabic"]["domain"] = "";
	$placeHoldersdomain_contacts["Arabic"]["domain"] = "";
	$fieldLabelsdomain_contacts["Arabic"]["nom"] = "Nom";
	$fieldToolTipsdomain_contacts["Arabic"]["nom"] = "";
	$placeHoldersdomain_contacts["Arabic"]["nom"] = "";
	if (count($fieldToolTipsdomain_contacts["Arabic"]))
		$tdatadomain_contacts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdomain_contacts["French"] = array();
	$fieldToolTipsdomain_contacts["French"] = array();
	$placeHoldersdomain_contacts["French"] = array();
	$pageTitlesdomain_contacts["French"] = array();
	$fieldLabelsdomain_contacts["French"]["type_contact"] = "Type Contact";
	$fieldToolTipsdomain_contacts["French"]["type_contact"] = "";
	$placeHoldersdomain_contacts["French"]["type_contact"] = "";
	$fieldLabelsdomain_contacts["French"]["domain"] = "Domain";
	$fieldToolTipsdomain_contacts["French"]["domain"] = "";
	$placeHoldersdomain_contacts["French"]["domain"] = "";
	$fieldLabelsdomain_contacts["French"]["nom"] = "Nom";
	$fieldToolTipsdomain_contacts["French"]["nom"] = "";
	$placeHoldersdomain_contacts["French"]["nom"] = "";
	if (count($fieldToolTipsdomain_contacts["French"]))
		$tdatadomain_contacts[".isUseToolTips"] = true;
}


	$tdatadomain_contacts[".NCSearch"] = true;



$tdatadomain_contacts[".shortTableName"] = "domain_contacts";
$tdatadomain_contacts[".nSecOptions"] = 0;

$tdatadomain_contacts[".mainTableOwnerID"] = "id_contact";
$tdatadomain_contacts[".entityType"] = 0;
$tdatadomain_contacts[".connId"] = "nicadmin_at_localhost";


$tdatadomain_contacts[".strOriginalTableName"] = "domain_contacts";

	



$tdatadomain_contacts[".showAddInPopup"] = false;

$tdatadomain_contacts[".showEditInPopup"] = false;

$tdatadomain_contacts[".showViewInPopup"] = false;

$tdatadomain_contacts[".listAjax"] = false;
//	temporary
//$tdatadomain_contacts[".listAjax"] = false;

	$tdatadomain_contacts[".audit"] = false;

	$tdatadomain_contacts[".locking"] = false;


$pages = $tdatadomain_contacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadomain_contacts[".edit"] = true;
	$tdatadomain_contacts[".afterEditAction"] = 1;
	$tdatadomain_contacts[".closePopupAfterEdit"] = 1;
	$tdatadomain_contacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadomain_contacts[".add"] = true;
$tdatadomain_contacts[".afterAddAction"] = 1;
$tdatadomain_contacts[".closePopupAfterAdd"] = 1;
$tdatadomain_contacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadomain_contacts[".list"] = true;
}



$tdatadomain_contacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadomain_contacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadomain_contacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadomain_contacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadomain_contacts[".printFriendly"] = true;
}



$tdatadomain_contacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadomain_contacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadomain_contacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadomain_contacts[".isUseAjaxSuggest"] = true;





$tdatadomain_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatadomain_contacts[".buttonsAdded"] = false;

$tdatadomain_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadomain_contacts[".isUseTimeForSearch"] = false;


$tdatadomain_contacts[".badgeColor"] = "edca00";


$tdatadomain_contacts[".allSearchFields"] = array();
$tdatadomain_contacts[".filterFields"] = array();
$tdatadomain_contacts[".requiredSearchFields"] = array();

$tdatadomain_contacts[".googleLikeFields"] = array();
$tdatadomain_contacts[".googleLikeFields"][] = "type_contact";
$tdatadomain_contacts[".googleLikeFields"][] = "domain";
$tdatadomain_contacts[".googleLikeFields"][] = "nom";



$tdatadomain_contacts[".tableType"] = "list";

$tdatadomain_contacts[".printerPageOrientation"] = 0;
$tdatadomain_contacts[".nPrinterPageScale"] = 100;

$tdatadomain_contacts[".nPrinterSplitRecords"] = 40;

$tdatadomain_contacts[".geocodingEnabled"] = false;










$tdatadomain_contacts[".pageSize"] = 20;

$tdatadomain_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadomain_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatadomain_contacts[".orderindexes"] = array();


$tdatadomain_contacts[".sqlHead"] = "SELECT domain_contacts.type_contact,  domains.`domain`,  contacts.nom";
$tdatadomain_contacts[".sqlFrom"] = "FROM domain_contacts  INNER JOIN domains ON domain_contacts.id_domain = domains.id  INNER JOIN contacts ON domain_contacts.id_contact = contacts.id";
$tdatadomain_contacts[".sqlWhereExpr"] = "";
$tdatadomain_contacts[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatadomain_contacts[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadomain_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadomain_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatadomain_contacts[".highlightSearchResults"] = true;

$tableKeysdomain_contacts = array();
$tableKeysdomain_contacts[] = "type_contact";
$tdatadomain_contacts[".Keys"] = $tableKeysdomain_contacts;


$tdatadomain_contacts[".hideMobileList"] = array();




//	type_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type_contact";
	$fdata["GoodName"] = "type_contact";
	$fdata["ownerTable"] = "domain_contacts";
	$fdata["Label"] = GetFieldLabel("domain_contacts","type_contact");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type_contact";

		$fdata["sourceSingle"] = "type_contact";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domain_contacts.type_contact";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "administrative";
	$edata["LookupValues"][] = "technical";
	$edata["LookupValues"][] = "owner";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadomain_contacts["type_contact"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "type_contact";
//	domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domain";
	$fdata["GoodName"] = "domain";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domain_contacts","domain");
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


	$tdatadomain_contacts["domain"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "domain";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("domain_contacts","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contacts.nom";

	
	
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


	$tdatadomain_contacts["nom"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "nom";


$tables_data["domain_contacts"]=&$tdatadomain_contacts;
$field_labels["domain_contacts"] = &$fieldLabelsdomain_contacts;
$fieldToolTips["domain_contacts"] = &$fieldToolTipsdomain_contacts;
$placeHolders["domain_contacts"] = &$placeHoldersdomain_contacts;
$page_titles["domain_contacts"] = &$pageTitlesdomain_contacts;


changeTextControlsToDate( "domain_contacts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["domain_contacts"] = array();
//	contacts
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contacts";
		$detailsParam["dOriginalTable"] = "contacts";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contacts";
	$detailsParam["dCaptionTable"] = GetTableCaption("contacts");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["domain_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["domain_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["domain_contacts"][$dIndex]["masterKeys"][]="nom";

				$detailsTablesData["domain_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["domain_contacts"][$dIndex]["detailKeys"][]="nom";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["domain_contacts"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="domains";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="domains";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "domains";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["domain_contacts"][0] = $masterParams;
				$masterTablesData["domain_contacts"][0]["masterKeys"] = array();
	$masterTablesData["domain_contacts"][0]["masterKeys"][]="domain";
				$masterTablesData["domain_contacts"][0]["detailKeys"] = array();
	$masterTablesData["domain_contacts"][0]["detailKeys"][]="domain";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_domain_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "domain_contacts.type_contact,  domains.`domain`,  contacts.nom";
$proto0["m_strFrom"] = "FROM domain_contacts  INNER JOIN domains ON domain_contacts.id_domain = domains.id  INNER JOIN contacts ON domain_contacts.id_contact = contacts.id";
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
	"m_strName" => "type_contact",
	"m_strTable" => "domain_contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto6["m_sql"] = "domain_contacts.type_contact";
$proto6["m_srcTableName"] = "domain_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domain",
	"m_strTable" => "domains",
	"m_srcTableName" => "domain_contacts"
));

$proto8["m_sql"] = "domains.`domain`";
$proto8["m_srcTableName"] = "domain_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto10["m_sql"] = "contacts.nom";
$proto10["m_srcTableName"] = "domain_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "domain_contacts";
$proto13["m_srcTableName"] = "domain_contacts";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_domain";
$proto13["m_columns"][] = "id_contact";
$proto13["m_columns"][] = "type_contact";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "domain_contacts";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "domain_contacts";
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
$proto17["m_srcTableName"] = "domain_contacts";
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
$proto16["m_sql"] = "INNER JOIN domains ON domain_contacts.id_domain = domains.id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "domain_contacts";
$proto18=array();
$proto18["m_sql"] = "domains.id = domain_contacts.id_domain";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "domains",
	"m_srcTableName" => "domain_contacts"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= domain_contacts.id_domain";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "contacts";
$proto21["m_srcTableName"] = "domain_contacts";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "Prenom";
$proto21["m_columns"][] = "personne_physique";
$proto21["m_columns"][] = "nom";
$proto21["m_columns"][] = "adresse";
$proto21["m_columns"][] = "tel";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fax";
$proto21["m_columns"][] = "date_creation";
$proto21["m_columns"][] = "date_modif";
$proto21["m_columns"][] = "etat";
$proto21["m_columns"][] = "id_fsi";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "adresse2";
$proto21["m_columns"][] = "state_prov";
$proto21["m_columns"][] = "zip_code";
$proto21["m_columns"][] = "city";
$proto21["m_columns"][] = "country";
$proto21["m_columns"][] = "authtype";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN contacts ON domain_contacts.id_contact = contacts.id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "domain_contacts";
$proto22=array();
$proto22["m_sql"] = "contacts.id = domain_contacts.id_contact";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= domain_contacts.id_contact";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="domain_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_domain_contacts = createSqlQuery_domain_contacts();


	
		;

			

$tdatadomain_contacts[".sqlquery"] = $queryData_domain_contacts;



$tdatadomain_contacts[".hasEvents"] = false;

?>