<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NTM</title>
</head>
<body>

<?php
    echo()
?>

	<form method="post" action="action.php" id=form2 name=form2>

        <!-- general parameters: see Form parameters -->
        <input name="PSPID" value="">
        <input name="ORDERID" value="">
        <input name="AMOUNT" value="">
        <input name="CURRENCY" value="">
        <input name="LANGUAGE" value="">
        <input name="CN" value="">
        <input name="EMAIL" value="">
        <input name="OWNERZIP" value="">
        <input name="OWNERADDRESS" value="">
        <input name="OWNERCTY" value="">
        <input name="OWNERTOWN" value="">
        <input name="OWNERTELNO" value="">

        <!-- check before the payment: see Security: Check before the payment -->
        <input type="hidden" name="SHASIGN" value="">
        <!-- layout information: see Look and feel of the payment page -->
        <input type="hidden" name="TITLE" value="">
        <input type="hidden" name="BGCOLOR" value="">
        <input type="hidden" name="TXTCOLOR" value="">
        <input type="hidden" name="TBLBGCOLOR" value="">
        <input type="hidden" name="TBLTXTCOLOR" value="">
        <input type="hidden" name="BUTTONBGCOLOR" value="">
        <input type="hidden" name="BUTTONTXTCOLOR" value="">
        <input type="hidden" name="LOGO" value="">
        <input type="hidden" name="FONTTYPE" value="">

        <!-- post payment redirection: see Transaction feedback to the customer -->
        <input type="hidden" name="ACCEPTURL" value="">
        <input type="hidden" name="DECLINEURL" value="">
        <input type="hidden" name="EXCEPTIONURL" value="">
        <input type="hidden" name="CANCELURL" value="">
        <input type="submit" value="" id=submit2 name=submit2>

    </form>


</body>
</html>