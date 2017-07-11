<?php
/*
**	Copyright (c) 2017 Nubersoft.com
**	Permission is hereby granted, free of charge *(see acception below in reference to
**	base CMS software)*, to any person obtaining a copy of this software (nUberSoft Framework)
**	and associated documentation files (the "Software"), to deal in the Software without
**	restriction, including without limitation the rights to use, copy, modify, merge, publish,
**	or distribute copies of the Software, and to permit persons to whom the Software is
**	furnished to do so, subject to the following conditions:
**	
**	The base CMS software* is not used for commercial sales except with expressed permission.
**	A licensing fee or waiver is required to run software in a commercial setting using
**	the base CMS software.
**	
**	*Base CMS software is defined as running the default software package as found in this
**	repository in the index.php page. This includes use of any of the nAutomator with the
**	default/modified/exended xml versions workflow/blockflows/actions.
**	
**	The above copyright notice and this permission notice shall be included in all
**	copies or substantial portions of the Software.
**
**	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
**	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
**	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
**	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
**	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
**	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
**	SOFTWARE.
*/
namespace nPlugins\Nubersoft;

if(!$this->isAdmin())
	return;

# Listen for changes to the toggle instructions
InspectorPallet\Observer::createListener();
# Create one-time inspector
$Inspector	=	new InspectorPallet();
# Determine status of the editor
$barActive	=	$Inspector->toolBarActive();
# If editor on, include the admintool bar
if($barActive) {
	# Turn on errors
	$this->setErrorMode();
?>
<div id="ajax_admindrop"></div>
	<?php
	# Create the admintools bar
	echo $Inspector->execute(array('ID'=>$this->getPage('ID')))
	?>
<div id="ajax_loadwindow"></div>
<?php
}
# Create a codetool helper
echo $this->useTemplatePlugin('component_tab');