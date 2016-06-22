<?php
if(!function_exists("AutoloadFunction"))
	return;

AutoloadFunction("allow_password_reset,password_reset_msg",__DIR__.'/functions/');
if(allow_password_reset()) {
		ob_start();
		include(NBR_RENDER_LIB._DS_.'assets'._DS_.'login'._DS_.'change.password.php');
		$data	=	ob_get_contents();
		ob_end_clean();
	}
elseif(!allow_password_reset() && $msg = password_reset_msg()) {
		ob_start();
?><div id="adminWrap">
<?php		if($msg == 'invalid')
				include(NBR_RENDER_LIB._DS_.'assets'._DS_.'login'._DS_.'message.invalid.php');
			else
				include(NBR_RENDER_LIB._DS_.'assets'._DS_.'login'._DS_.'message.error.php');
?>
<p style="font-size: 12px; cursor: pointer;" class="ajaxDispatcher" data-returned="html" data-sendto="#adminWrap" data-action="iforgot" data-senddata='<?php echo json_encode(array("name"=>"command","value"=>"forgot_pass")); ?>' data-senddataas="json">Try again.</p>
</div>
<?php	$data	=	ob_get_contents();
		ob_end_clean();	
	}
	
$this->condMet	=	(isset($data))? $data : false;