<head>
<link href="./css/style2.css" rel="stylesheet" type="text/css" />
</head>

<!-- Koop code voor paypal geen sessievariabelen nodig omdat de gebruiker zijn paypal account gebruikt -->
<div id="buydiv">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" align="center">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JZZDSFS9LWZGC">
<input type="hidden" name="on0" value="Tickets">
<div>Tickets</div>
<div><select name="os0">
	<option value="VIP Ticket">VIP Ticket €100,00 EUR</option>
	<option value="Silver Ticket">Silver Ticket €50,00 EUR</option>
	<option value="Regular Ticket">Regular Ticket €25,00 EUR</option>
</select></div>
<input type="hidden" name="currency_code" value="EUR">
<div><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></div>
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</div>