<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOKU Payment Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="https://staging.doku.com/doku-js/assets/css/doku.css"/>
</head>
<body>

<section class="default-width"><!-- start content -->

    <div class="head padd-default"><!-- start head -->
        <div class="left-head fleft">
            <img src="https://staging.doku.com/doku-js/assets/images/logo-merchant1.png" alt="" />
        </div>
        <div class="clear"></div>
    </div><!-- end head -->
            <div class="line"></div>
    <div class="content-payment-channel padd-default"><!-- start content payment channel -->
        <form action="{{url('doku/payment')}}" method="post" name="frmTester">
	    <div> <!-- mandiri clickpay -->
	    <div class="styled-input" align='CENTER'>
		FULL
            </div>
	        <input type="hidden" id="form_type" name="form_type" value="full"/>
            <div class="styled-input">
                <input type="text" id="mall_id" name="mall_id" value="3019" required />
                <label>Mall ID</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="chain_merchant" name="chain_merchant" value="NA" required />
                <label>Chain Merchant</label>
            </div>
	    <div class="styled-input">
                <select name="payment_channel" id="payment_channel" value="payment_channel" required>
                    <option value="15" selected="selected">Credit Card</option>
                    <option value="04">Doku Wallet</option>
                    <option value="02">Mandiri Clickpay</option>
                    <option value="05">Convenience Store / VA Permata</option>
                </select>
            </div>
	    <div class="styled-input">
                <input type="text" id="trans_id" name="trans_id" value="<?php echo 'full_'. time()?>" required />
                <label>Transaction ID</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="amount" name="amount" value="50000.00" required />
                <label>Amount</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="currency" name="currency" value="360" required />
                <label>Currency</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="cust_name" name="cust_name" value="Customer Name" required />
                <label>Customer Name</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="cust_email" name="cust_email" value="customer@domail.com" required />
                <label>Customer Email</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="cust_phone" name="cust_phone" value="0818000000" required />
                <label>Customer Phone</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="cust_id" name="cust_id" value="" required />
                <label>Customer ID</label>
            </div>
	    <div class="styled-input">
                <input type="text" id="payment_token" name="payment_token" value="" required />
                <label>Payment Token</label>
            </div>
	    <input type="button" value="Process Payment" class="default-btn" onclick="submitForm();"">
        </div><!-- mandiri clickpay -->
        </form>
    </div><!-- end content payment channel -->

</section><!-- end content -->

<div class="footer">
    <div class="">Copyright DOKU 2016</div>
</div>
<script type="text/javascript">
    function submitForm(){
	if (document.getElementById('payment_channel').value == '05') {
                    frmTester.action = 'payment/paymentDoku.php';
                }else {
                    frmTester.action = '{{ url('doku/payment') }}';
                }
        frmTester.submit();
    }
</script>
</body>
</html>
