<?php
	if(!function_exists("is_admin"))
		return false;
	
	if(!is_admin())
		exit;
	
	if(empty($setData['unique_id'])) {
			include(__DIR__.'/no.action.php');
			return;
		}
		
	// Filter out action words
	$filter	=	array('ID','unique_id', 'ref_page', 'parent_id', 'page_live');
	AutoloadFunction("FetchUniqueId");
?><div style="overflow: auto; display: block; margin: 15px auto; border: 1px solid #EBEBEB; padding: 30px; background-color: #EBEBEB; font-size: 14px;">
	<form action="<?php echo $_SERVER['HTTP_REFERER']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="requestTable" value="components">
		<input type="hidden" name="ref_spot" value="lib">
		<div style="max-height: 250px; overflow: auto;margin-bottom: 20px;" class="nbr_general_form">
			<table style="width: 100%;" cellpadding="0" cellspacing="0" border="0">
<?php
	foreach($setData as $key => $value) {
			if(!empty($value) && !in_array($key, $filter)) {
					$kind	=	(strlen($value) > 40)? 'textarea' : 'text';
?>				<tr>
					<td style="padding: 8px; border-bottom: 2px groove; white-space: nowrap;">
						<?php echo ucwords(str_replace("_", " ", $key)); ?>
					</td>
					<td style="border-bottom:  2px groove;">
<?php 				if($kind == 'text') {
?>
						<input type="text" name="<?php echo $key; ?>" value="<?php echo Safe::decodeForm($value); ?>" onClick="this.select()" />
<?php 					}
					else {
?>						<pre><textarea name="<?php echo $key; ?>" onClick="this.select()"><?php echo Safe::decodeForm($value); ?></textarea></pre>
<?php 					}
?>					</td>
				</tr>
<?php 			}
		}
	?>		</table>
			<p>Name the component for reference</p>
			<input type="text" name="ref_anchor" style="width: 300px; float: left; text-align: left;" value="<?php echo 'NAME'.FetchUniqueId(); ?>" onClick="this.value=''" placeholder="Create a Unique Name" />
		</div>
		<div class="nbr_button"><input type="submit" name="add" value="SAVE" style="margin: 0; float: right; font-size: 18px;" /></div>
	</form>
</div>
