<?php

// STEP 1: Build the request array
$requestData = array
(
		"MerchantID" => $_REQUEST["MerchantID"],
		"IpPort" => "9100",
		"TranType" => $_REQUEST["TranType"],
		"TranCode" => $_REQUEST["TranCode"],
		"InvoiceNo" => $_REQUEST["InvoiceNo"],
		"RefNo" => $_REQUEST["RefNo"],
		"AcctNo" => $_REQUEST["AcctNo"],
		"Memo" => $_REQUEST["Memo"],
		"Purchase" => $_REQUEST["Purchase"]
);

echo "<h2>Request Data</h2>";
print_r($requestData);

// STEP 2: Use helper class to process the MercuryGift Web Services transaction
include_once("Mercury_Web_Services_SOAP_Helper.php");
$soapHelper = new Mercury_Web_Services_SOAP_Helper();
$responseData = $soapHelper->gift_transaction($requestData, $_REQUEST["Password"]);

// STEP 3: Read parsed response to check for approval
if ($responseData["CmdStatus"] <> ""
		&& $responseData["CmdStatus"] == "Approved")
{
	echo "<font color=\"green\">";
	echo "<h2>Approved Response Data</h2>";
	print_r($responseData);
	echo "</font>";
}
else
{
	echo "<font color=\"red\">";
	echo "<h2>Declined/Error Response Data</h2>";
	print_r($responseData);
	echo "</font>";
}

?>
