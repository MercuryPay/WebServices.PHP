<html>
<head>
	<title>MercuryGift Web Services Sample</title>
</head>
<body>
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
			<td>
				<form name="form1" method="post" action="process.php">
					<table width="100%" border="0" cellspacing="1" cellpadding="3">
						
						<tr>
							<td width="15%">MerchantID:</td>
							<td width="30%"><input name="MerchantID" type="text" id="MerchantID" size="50" value="595901"></td>
							<td width="15%">Password:</td>
							<td width="30%"><input name="Password" type="text" id="Password" size="50" value="xyz"></td>
						</tr>
						
						<tr>
							<td width="15%">TranType:</td>
							<td width="30%"><input name="TranType" type="text" id="TranType" size="50" value="PrePaid"></td>
							<td width="15%">TranCode:</td>
							<td width="30%">
								<select name="TranCode" id="TranCode">
									<option>Balance</option>
									<option>Sale</option>
									<option>Reload</option>
									<option>Issue</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td width="15%">InvoiceNo:</td>
							<td width="30%"><input name="InvoiceNo" type="text" id="InvoiceNo" size="50" value="12345"></td>
							<td width="15%">RefNo:</td>
							<td width="30%"><input name="RefNo" type="text" id="RefNo" size="50" value="12345"></td>
						</tr>
						
						<tr>
							<td width="15%">AcctNo:</td>
							<td width="30%"><input name="AcctNo" type="text" id="AcctNo" size="50" value="6050110010021824998"></td>
							<td width="15%">Memo:</td>
							<td width="30%"><input name="Memo" type="text" id="Memo" size="50" value="MercuryGift Web Services PHP Sample"></td>
						</tr>
						
						<tr>
							<td width="15%">Purchase:</td>
							<td width="30%"><input name="Purchase" type="text" id="Purchase" size="50" value="2.25"></td>
							<td width="15%">&nbsp;</td>
							<td width="30%">&nbsp;</td>
						</tr>
						
						<tr>
							<td colspan="2"><input type="submit" name="Submit" value="Submit"> <input type="reset" name="reset" value="Reset"></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						
					</table>
				</form>
			</td>
		</tr>
	</table>

</body>
</html>