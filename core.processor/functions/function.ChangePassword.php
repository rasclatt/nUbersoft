<?php
/*Title: ChangePassword()*/
/*Description: This function just includes the change password html for use when user requests to change their password. It must be used in conjunction with `AutoloadFunction()`*/

	function ChangePassword()
		{
			printpre(NubeData::$settings);
			
			
			$reset	=	NubeData::$settings->engine->reset->reset;
			$data	=	NubeData::$settings->engine->reset->data;
			if($reset != false)
				include(NBR_RENDER_LIB._DS_.'assets'._DS_.'login'._DS_.'change.password.php');
		}