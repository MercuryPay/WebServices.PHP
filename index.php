<html>

<head>
	<title>PHP Transaction Samples for Mercury Web Services</title>
	<style>
		td,
		th {
			padding: 5px !important;
		}

		input {
			padding: 3px !important;
		}

		.btn {
			padding: 7px !important;
		}
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	    crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	    crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	    crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row">

			<div class="table-responsive">
				<table class="table">
					<!-- Credit Transactions -->
					<tr>
						<td>
							<form name="form1" method="post" action="ProcessTransaction.php">
								<table>
									<tr>
										<td width="50%" colspan="4">
											<h2>Test Credit Transaction</h2>
											<h5>Some text goes here</h5>
										</td>
									</tr>
									<tr>
										<td width="10%">MerchantID:</td>
										<td width="15%">
											<input name="MerchantID" type="text" id="MerchantID" size="25" value="337234001">
										</td>
										<td width="15%">Password:</td>
										<td width="30%">
											<input name="Password" type="text" id="Password" size="25" value="xyz">
										</td>

									</tr>

									<tr>
										<td width="15%">Lane ID:</td>
										<td width="30%">
											<input name="LaneID" type="text" id="02" size="25" value="1">
										</td>
									</tr>

									<tr>
										<td width="15%">TranType:</td>
										<td width="30%">
											<input name="TranType" type="text" id="TranType" size="25" value="Credit">
										</td>
										<td width="15%">TranCode:</td>
										<td width="30%">
											<select name="TranCode" id="TranCode">
												<option>Sale</option>
												<option>Return</option>
											</select>
										</td>
									</tr>

									<tr>
										<td width="15%">InvoiceNo:</td>
										<td width="30%">
											<input name="InvoiceNo" type="text" id="InvoiceNo" size="25" value="12345">
										</td>
										<td width="15%">RefNo:</td>
										<td width="30%">
											<input name="RefNo" type="text" id="RefNo" size="25" value="12345">
										</td>
									</tr>

									<tr>
										<td width="15%">AcctNo:</td>
										<td width="30%">
											<input name="AcctNo" type="text" id="AcctNo" size="25" value="5499990123456781">
										</td>
										<td width="15%">ExpDate:</td>
										<td width="30%">
											<input name="ExpDate" type="text" id="ExpDate" size="25" value="1215">
										</td>
									</tr>

									<tr>
										<td width="15%">Purchase:</td>
										<td width="30%">
											<input name="Purchase" type="text" id="Purchase" size="25" value="2.25">
										</td>
										<td width="15%">Memo:</td>
										<td width="30%">
											<input name="Memo" type="text" id="Memo" size="25" value="Testing WebServices PHP">
										</td>
									</tr>

									<tr>
										<td colspan="12">
											<input type="reset" class="btn btn-danger" name="reset" value="RESET DEFAULTS">
											<input type="submit" class="btn btn-success" name="Submit" value="SUBMIT TEST CREDIT TRANSACTION REQUEST">
										</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>

								</table>
							</form>
						</td>
						</tr>

						<!-- Gift Transactions -->
						<tr>
							<td>
								<form name="form2" method="post" action="ProcessTransaction.php">
									<table>
										<tr>
											<td width="100%" colspan="4">
												<h2>Test Gift Transaction</h2>
												<h5>Some text goes here</h5>
											</td>
										</tr>
										<tr>
											<td width="15%">MerchantID:</td>
											<td width="30%">
												<input name="MerchantID" type="text" id="MerchantID" size="25" value="337234001">
											</td>
											<td width="15%">Password:</td>
											<td width="30%">
												<input name="Password" type="text" id="Password" size="25" value="xyz">
											</td>
										</tr>

										<tr>
											<td width="15%">TranType:</td>
											<td width="30%">
												<input name="TranType" type="text" id="TranType" size="25" value="PrePaid">
											</td>
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
											<td width="30%">
												<input name="InvoiceNo" type="text" id="InvoiceNo" size="25" value="12345">
											</td>
											<td width="15%">RefNo:</td>
											<td width="30%">
												<input name="RefNo" type="text" id="RefNo" size="25" value="12345">
											</td>
										</tr>

										<tr>
											<td width="15%">AcctNo:</td>
											<td width="30%">
												<input name="AcctNo" type="text" id="AcctNo" size="25" value="6050110010032766771">
											</td>
											<td width="15%">Memo:</td>
											<td width="30%">
												<input name="Memo" type="text" id="Memo" size="25" value="Testing WebServices PHP">
											</td>
										</tr>

										<tr>
											<td width="15%">Purchase:</td>
											<td width="30%">
												<input name="Purchase" type="text" id="Purchase" size="25" value="2.25">
											</td>
											<td width="15%">&nbsp;</td>
											<td width="30%">&nbsp;</td>
										</tr>

										<tr>
											<td colspan="12">
												<input type="reset" class="btn btn-danger" name="reset" value="RESET DEFAULTS">
												<input type="submit" class="btn btn-success" name="Submit" value="SUBMIT TEST GIFT TRANSACTION REQUEST">
											</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>

									</table>
								</form>
							</td>
							</tr>

							<!-- Close Batch -->
							<tr>
								<td>
									<form name="form3" method="post" action="CloseBatch.php">
										<table>
											<tr>
												<td width="100%" colspan="4">
													<h2>Test Batch Close</h2>
													<h5>Some text goes here</h5>
												</td>
											</tr>
											<tr>
												<td width="15%">MerchantID:</td>
												<td width="30%">
													<input name="MerchantID" type="text" id="MerchantID" size="25" value="337234001">
												</td>
												<td width="15%">Password:</td>
												<td width="30%">
													<input name="Password" type="text" id="Password" size="25" value="xyz">
												</td>
											</tr>

											<tr>
												<td colspan="12">
													<input type="submit" class="btn btn-warning" name="Submit" value="SUBMIT BATCH CLOSE REQUEST">
												</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>

										</table>
									</form>
								</td>
								</tr>
				</table>
			</div>
		</div>
	</div>
</body>

</html>