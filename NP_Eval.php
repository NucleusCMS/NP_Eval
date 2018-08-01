<?php
class NP_Eval extends NucleusPlugin
{
	function getName()              {return 'NP_Eval'; }
	function getAuthor()            {return 'yama'; }
	function getVersion()           {return '0.2'; }
	function getURL()               {return 'https://github.com/NucleusCMS/NP_Eval';}
	function getDescription()       {return '';}
	function supportsFeature($w)    {return ($w=='SqlTablePrefix')?1:0; }
	function getMinNucleusVersion() {return 330; }

	function doSkinVar($skinType='') {$this->output($params = func_get_args());}
	function doTemplateVar(&$item) {$this->output($params = func_get_args());}
	function doItemVar(&$item)     {$this->output($params = func_get_args());}
	
	function output($params)
	{
		unset($params[0]);
		$param = join(',', $params);
		$param = trim($param, ';') . ';';
		eval($param);
	}
}
?>
