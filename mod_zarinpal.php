<?php
/**
 * @version SVN: $Id$
 * @package    ماژول آسان پرداختزرین پال 
 * @subpackage Base
 * @author     Masoud Amini {@link http://haftir.com}
 * @author     Created on 29-April-2013
 * @license    GNU/GPL
 */

//-- No direct access
defined('_JEXEC') or die('=;)');

// -- PARAMETRI
$value = $params->get('value');
$pretext = $params->get('pretext');
$link = $params->get('link');

?>
<style>
#joomina_copyright a {
	color:#06F}
#joomina_copyright a:hover {
	color: #F90}	
#joominazarinpal {
	width:98%;
	margin:0 auto;
	padding:5px;
	background-color:#FFF;
	color:#000
	}
.joomina_pinput {
	
	padding-top:10px;
	padding-bottom:10px}
#TransactionAmount input{
width:100px}

.joomina_pinput  input {
	background-color: #FEFDDA;
	color:#09C;
        width:120px
	}
.joomina_s {
	padding-right:10px}

</style>
<div id="joominazarinpal">
<form action="https://www.zarinpal.com/webservice/Simplepay" method="post" id="TransactionAddForm">
	<input type="hidden" id="TransactionAccountID" value=<?php echo "$value" ?> name="data[Transaction][account_id]">
    <?php echo "$pretext" ?>
    <br/>
    <div class="joomina_pinput">
    
      <input type="hidden" id="TransactionAmount"  name="data[Transaction][amount]"><?php echo "تومان" ?>
      </div>
		<input type="hidden" id="type" value='1' name="type">
		<input type="hidden" id="TransactionDesc" value="توضيح تراکنش واريزی" name="data[Transaction][desc]">
	<input type="hidden" id="TransactionRedirectUrl" value=<?php echo "$link" ?> name="data[Transaction][redirect_url]">
	<div class="submit"><div class="joomina_s"><input src="http://www.zarinpal.com/img/merchant/merchant-6.png" type=image></div></div>
</form>
</div>