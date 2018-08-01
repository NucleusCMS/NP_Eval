<?php
class NP_Eval extends NucleusPlugin
{
	function getName()              {return 'NP_Eval'; }
	function getAuthor()            {return 'yama'; }
	function getVersion()           {return '0.11'; }
	function getURL()               {return '';}
	function getDescription()       {return '';}
	function supportsFeature($w)    {return ($w=='SqlTablePrefix')?1:0; }
	function getMinNucleusVersion() {return 330; }

	function doSkinVar()     {$this->output($params = func_get_args());}
	function doTemplateVar() {$this->output($params = func_get_args());}
	function doItemVar()     {$this->output($params = func_get_args());}
	
	function output($params)
	{
		unset($params[0]);
		$param = join(',', $params);
		$param = trim($param, ';') . ';';
		eval($param);
	}
}
?>
