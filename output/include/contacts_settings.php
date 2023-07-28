<?php
$tdatacontacts = array();
$tdatacontacts[".searchableFields"] = array();
$tdatacontacts[".ShortName"] = "contacts";
$tdatacontacts[".OwnerID"] = "id_fsi";
$tdatacontacts[".OriginalTable"] = "contacts";


$tdatacontacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontacts[".originalPagesByType"] = $tdatacontacts[".pagesByType"];
$tdatacontacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontacts[".originalPages"] = $tdatacontacts[".pages"];
$tdatacontacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontacts[".originalDefaultPages"] = $tdatacontacts[".defaultPages"];

//	field labels
$fieldLabelscontacts = array();
$fieldToolTipscontacts = array();
$pageTitlescontacts = array();
$placeHolderscontacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontacts["English"] = array();
	$fieldToolTipscontacts["English"] = array();
	$placeHolderscontacts["English"] = array();
	$pageTitlescontacts["English"] = array();
	$fieldLabelscontacts["English"]["id"] = "Id";
	$fieldToolTipscontacts["English"]["id"] = "";
	$placeHolderscontacts["English"]["id"] = "";
	$fieldLabelscontacts["English"]["Prenom"] = "Prenom";
	$fieldToolTipscontacts["English"]["Prenom"] = "";
	$placeHolderscontacts["English"]["Prenom"] = "";
	$fieldLabelscontacts["English"]["personne_physique"] = "Personne Physique";
	$fieldToolTipscontacts["English"]["personne_physique"] = "";
	$placeHolderscontacts["English"]["personne_physique"] = "";
	$fieldLabelscontacts["English"]["nom"] = "Nom";
	$fieldToolTipscontacts["English"]["nom"] = "";
	$placeHolderscontacts["English"]["nom"] = "";
	$fieldLabelscontacts["English"]["adresse"] = "Adresse";
	$fieldToolTipscontacts["English"]["adresse"] = "";
	$placeHolderscontacts["English"]["adresse"] = "";
	$fieldLabelscontacts["English"]["tel"] = "Tel";
	$fieldToolTipscontacts["English"]["tel"] = "";
	$placeHolderscontacts["English"]["tel"] = "";
	$fieldLabelscontacts["English"]["email"] = "Email";
	$fieldToolTipscontacts["English"]["email"] = "";
	$placeHolderscontacts["English"]["email"] = "";
	$fieldLabelscontacts["English"]["fax"] = "Fax";
	$fieldToolTipscontacts["English"]["fax"] = "";
	$placeHolderscontacts["English"]["fax"] = "";
	$fieldLabelscontacts["English"]["date_creation"] = "Date Creation";
	$fieldToolTipscontacts["English"]["date_creation"] = "";
	$placeHolderscontacts["English"]["date_creation"] = "";
	$fieldLabelscontacts["English"]["date_modif"] = "Date Modif";
	$fieldToolTipscontacts["English"]["date_modif"] = "";
	$placeHolderscontacts["English"]["date_modif"] = "";
	$fieldLabelscontacts["English"]["etat"] = "Etat";
	$fieldToolTipscontacts["English"]["etat"] = "";
	$placeHolderscontacts["English"]["etat"] = "";
	$fieldLabelscontacts["English"]["id_fsi"] = "Id Fsi";
	$fieldToolTipscontacts["English"]["id_fsi"] = "";
	$placeHolderscontacts["English"]["id_fsi"] = "";
	$fieldLabelscontacts["English"]["password"] = "Password";
	$fieldToolTipscontacts["English"]["password"] = "";
	$placeHolderscontacts["English"]["password"] = "";
	$fieldLabelscontacts["English"]["adresse2"] = "Adresse2";
	$fieldToolTipscontacts["English"]["adresse2"] = "";
	$placeHolderscontacts["English"]["adresse2"] = "";
	$fieldLabelscontacts["English"]["state_prov"] = "State Prov";
	$fieldToolTipscontacts["English"]["state_prov"] = "";
	$placeHolderscontacts["English"]["state_prov"] = "";
	$fieldLabelscontacts["English"]["zip_code"] = "Zip Code";
	$fieldToolTipscontacts["English"]["zip_code"] = "";
	$placeHolderscontacts["English"]["zip_code"] = "";
	$fieldLabelscontacts["English"]["city"] = "City";
	$fieldToolTipscontacts["English"]["city"] = "";
	$placeHolderscontacts["English"]["city"] = "";
	$fieldLabelscontacts["English"]["country"] = "Country";
	$fieldToolTipscontacts["English"]["country"] = "";
	$placeHolderscontacts["English"]["country"] = "";
	$fieldLabelscontacts["English"]["authtype"] = "Authtype";
	$fieldToolTipscontacts["English"]["authtype"] = "";
	$placeHolderscontacts["English"]["authtype"] = "";
	if (count($fieldToolTipscontacts["English"]))
		$tdatacontacts[".isUseToolTips"] = true;
}


	$tdatacontacts[".NCSearch"] = true;



$tdatacontacts[".shortTableName"] = "contacts";
$tdatacontacts[".nSecOptions"] = 1;

$tdatacontacts[".mainTableOwnerID"] = "id_fsi";
$tdatacontacts[".entityType"] = 0;
$tdatacontacts[".connId"] = "nicadmin_at_localhost";


$tdatacontacts[".strOriginalTableName"] = "contacts";

	



$tdatacontacts[".showAddInPopup"] = false;

$tdatacontacts[".showEditInPopup"] = false;

$tdatacontacts[".showViewInPopup"] = false;

$tdatacontacts[".listAjax"] = false;
//	temporary
//$tdatacontacts[".listAjax"] = false;

	$tdatacontacts[".audit"] = false;

	$tdatacontacts[".locking"] = false;


$pages = $tdatacontacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontacts[".edit"] = true;
	$tdatacontacts[".afterEditAction"] = 1;
	$tdatacontacts[".closePopupAfterEdit"] = 1;
	$tdatacontacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontacts[".add"] = true;
$tdatacontacts[".afterAddAction"] = 1;
$tdatacontacts[".closePopupAfterAdd"] = 1;
$tdatacontacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontacts[".list"] = true;
}



$tdatacontacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontacts[".printFriendly"] = true;
}



$tdatacontacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontacts[".isUseAjaxSuggest"] = true;





$tdatacontacts[".ajaxCodeSnippetAdded"] = false;

$tdatacontacts[".buttonsAdded"] = false;

$tdatacontacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontacts[".isUseTimeForSearch"] = false;


$tdatacontacts[".badgeColor"] = "9acd32";


$tdatacontacts[".allSearchFields"] = array();
$tdatacontacts[".filterFields"] = array();
$tdatacontacts[".requiredSearchFields"] = array();

$tdatacontacts[".googleLikeFields"] = array();
$tdatacontacts[".googleLikeFields"][] = "id";
$tdatacontacts[".googleLikeFields"][] = "Prenom";
$tdatacontacts[".googleLikeFields"][] = "personne_physique";
$tdatacontacts[".googleLikeFields"][] = "nom";
$tdatacontacts[".googleLikeFields"][] = "adresse";
$tdatacontacts[".googleLikeFields"][] = "tel";
$tdatacontacts[".googleLikeFields"][] = "email";
$tdatacontacts[".googleLikeFields"][] = "fax";
$tdatacontacts[".googleLikeFields"][] = "date_creation";
$tdatacontacts[".googleLikeFields"][] = "date_modif";
$tdatacontacts[".googleLikeFields"][] = "etat";
$tdatacontacts[".googleLikeFields"][] = "id_fsi";
$tdatacontacts[".googleLikeFields"][] = "password";
$tdatacontacts[".googleLikeFields"][] = "adresse2";
$tdatacontacts[".googleLikeFields"][] = "state_prov";
$tdatacontacts[".googleLikeFields"][] = "zip_code";
$tdatacontacts[".googleLikeFields"][] = "city";
$tdatacontacts[".googleLikeFields"][] = "country";
$tdatacontacts[".googleLikeFields"][] = "authtype";



$tdatacontacts[".tableType"] = "list";

$tdatacontacts[".printerPageOrientation"] = 0;
$tdatacontacts[".nPrinterPageScale"] = 100;

$tdatacontacts[".nPrinterSplitRecords"] = 40;

$tdatacontacts[".geocodingEnabled"] = false;










$tdatacontacts[".pageSize"] = 20;

$tdatacontacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontacts[".strOrderBy"] = $tstrOrderBy;

$tdatacontacts[".orderindexes"] = array();


$tdatacontacts[".sqlHead"] = "SELECT id,  	Prenom,  	personne_physique,  	nom,  	adresse,  	tel,  	email,  	fax,  	date_creation,  	date_modif,  	etat,  	id_fsi,  	password,  	adresse2,  	state_prov,  	zip_code,  	city,  	country,  	authtype";
$tdatacontacts[".sqlFrom"] = "FROM contacts";
$tdatacontacts[".sqlWhereExpr"] = "";
$tdatacontacts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontacts[".arrGroupsPerPage"] = $arrGPP;

$tdatacontacts[".highlightSearchResults"] = true;

$tableKeyscontacts = array();
$tableKeyscontacts[] = "id";
$tdatacontacts[".Keys"] = $tableKeyscontacts;


$tdatacontacts[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacontacts["id"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "id";
//	Prenom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Prenom";
	$fdata["GoodName"] = "Prenom";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","Prenom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Prenom";

		$fdata["sourceSingle"] = "Prenom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prenom";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["Prenom"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "Prenom";
//	personne_physique
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "personne_physique";
	$fdata["GoodName"] = "personne_physique";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","personne_physique");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "personne_physique";

		$fdata["sourceSingle"] = "personne_physique";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personne_physique";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacontacts["personne_physique"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "personne_physique";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

		$fdata["sourceSingle"] = "nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatacontacts["nom"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "nom";
//	adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "adresse";
	$fdata["GoodName"] = "adresse";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","adresse");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "adresse";

		$fdata["sourceSingle"] = "adresse";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adresse";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatacontacts["adresse"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "adresse";
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","tel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tel";

		$fdata["sourceSingle"] = "tel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacontacts["tel"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "tel";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["email"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "email";
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","fax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fax";

		$fdata["sourceSingle"] = "fax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacontacts["fax"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "fax";
//	date_creation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "date_creation";
	$fdata["GoodName"] = "date_creation";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","date_creation");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_creation";

		$fdata["sourceSingle"] = "date_creation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_creation";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacontacts["date_creation"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "date_creation";
//	date_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "date_modif";
	$fdata["GoodName"] = "date_modif";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","date_modif");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_modif";

		$fdata["sourceSingle"] = "date_modif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_modif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacontacts["date_modif"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "date_modif";
//	etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "etat";
	$fdata["GoodName"] = "etat";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","etat");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "etat";

		$fdata["sourceSingle"] = "etat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "etat";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacontacts["etat"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "etat";
//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","id_fsi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fsi";

		$fdata["sourceSingle"] = "id_fsi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fsi";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacontacts["id_fsi"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "id_fsi";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontacts["password"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "password";
//	adresse2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "adresse2";
	$fdata["GoodName"] = "adresse2";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","adresse2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "adresse2";

		$fdata["sourceSingle"] = "adresse2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adresse2";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["adresse2"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "adresse2";
//	state_prov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "state_prov";
	$fdata["GoodName"] = "state_prov";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","state_prov");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "state_prov";

		$fdata["sourceSingle"] = "state_prov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "state_prov";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["state_prov"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "state_prov";
//	zip_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zip_code";
	$fdata["GoodName"] = "zip_code";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","zip_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zip_code";

		$fdata["sourceSingle"] = "zip_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip_code";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatacontacts["zip_code"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "zip_code";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "city";

		$fdata["sourceSingle"] = "city";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["city"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "city";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country";

		$fdata["sourceSingle"] = "country";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacontacts["country"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "country";
//	authtype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "authtype";
	$fdata["GoodName"] = "authtype";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","authtype");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "authtype";

		$fdata["sourceSingle"] = "authtype";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "authtype";

	
	
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
	$edata["LookupValues"][] = "pw";
	$edata["LookupValues"][] = "ext";

	
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


	$tdatacontacts["authtype"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "authtype";


$tables_data["contacts"]=&$tdatacontacts;
$field_labels["contacts"] = &$fieldLabelscontacts;
$fieldToolTips["contacts"] = &$fieldToolTipscontacts;
$placeHolders["contacts"] = &$placeHolderscontacts;
$page_titles["contacts"] = &$pageTitlescontacts;


changeTextControlsToDate( "contacts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contacts"] = array();
//	domain_contacts
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="domain_contacts";
		$detailsParam["dOriginalTable"] = "domain_contacts";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "domain_contacts";
	$detailsParam["dCaptionTable"] = GetTableCaption("domain_contacts");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["detailKeys"][]="id_contact";
//	domains
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="domains";
		$detailsParam["dOriginalTable"] = "domains";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "domains";
	$detailsParam["dCaptionTable"] = GetTableCaption("domains");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["detailKeys"][]="contact";
//	late_domains
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="late_domains";
		$detailsParam["dOriginalTable"] = "late_domains";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "late_domains";
	$detailsParam["dCaptionTable"] = GetTableCaption("late_domains");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contacts"][$dIndex]["detailKeys"][]="contact";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contacts"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fsi";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fsi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fsi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contacts"][0] = $masterParams;
				$masterTablesData["contacts"][0]["masterKeys"] = array();
	$masterTablesData["contacts"][0]["masterKeys"][]="id_fsi";
				$masterTablesData["contacts"][0]["detailKeys"] = array();
	$masterTablesData["contacts"][0]["detailKeys"][]="id_fsi";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Prenom,  	personne_physique,  	nom,  	adresse,  	tel,  	email,  	fax,  	date_creation,  	date_modif,  	etat,  	id_fsi,  	password,  	adresse2,  	state_prov,  	zip_code,  	city,  	country,  	authtype";
$proto0["m_strFrom"] = "FROM contacts";
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
	"m_strName" => "id",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Prenom",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto8["m_sql"] = "Prenom";
$proto8["m_srcTableName"] = "contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "personne_physique",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto10["m_sql"] = "personne_physique";
$proto10["m_srcTableName"] = "contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto12["m_sql"] = "nom";
$proto12["m_srcTableName"] = "contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto14["m_sql"] = "adresse";
$proto14["m_srcTableName"] = "contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto16["m_sql"] = "tel";
$proto16["m_srcTableName"] = "contacts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "contacts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto20["m_sql"] = "fax";
$proto20["m_srcTableName"] = "contacts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "date_creation",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto22["m_sql"] = "date_creation";
$proto22["m_srcTableName"] = "contacts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modif",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto24["m_sql"] = "date_modif";
$proto24["m_srcTableName"] = "contacts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "etat",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto26["m_sql"] = "etat";
$proto26["m_srcTableName"] = "contacts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fsi",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto28["m_sql"] = "id_fsi";
$proto28["m_srcTableName"] = "contacts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto30["m_sql"] = "password";
$proto30["m_srcTableName"] = "contacts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse2",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto32["m_sql"] = "adresse2";
$proto32["m_srcTableName"] = "contacts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "state_prov",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto34["m_sql"] = "state_prov";
$proto34["m_srcTableName"] = "contacts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_code",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto36["m_sql"] = "zip_code";
$proto36["m_srcTableName"] = "contacts";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto38["m_sql"] = "city";
$proto38["m_srcTableName"] = "contacts";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto40["m_sql"] = "country";
$proto40["m_srcTableName"] = "contacts";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "authtype",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto42["m_sql"] = "authtype";
$proto42["m_srcTableName"] = "contacts";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "contacts";
$proto45["m_srcTableName"] = "contacts";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "Prenom";
$proto45["m_columns"][] = "personne_physique";
$proto45["m_columns"][] = "nom";
$proto45["m_columns"][] = "adresse";
$proto45["m_columns"][] = "tel";
$proto45["m_columns"][] = "email";
$proto45["m_columns"][] = "fax";
$proto45["m_columns"][] = "date_creation";
$proto45["m_columns"][] = "date_modif";
$proto45["m_columns"][] = "etat";
$proto45["m_columns"][] = "id_fsi";
$proto45["m_columns"][] = "password";
$proto45["m_columns"][] = "adresse2";
$proto45["m_columns"][] = "state_prov";
$proto45["m_columns"][] = "zip_code";
$proto45["m_columns"][] = "city";
$proto45["m_columns"][] = "country";
$proto45["m_columns"][] = "authtype";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "contacts";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "contacts";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contacts = createSqlQuery_contacts();


	
		;

																			

$tdatacontacts[".sqlquery"] = $queryData_contacts;



$tdatacontacts[".hasEvents"] = false;

?>