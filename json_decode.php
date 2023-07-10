if($_SESSION['SequentialLoading'] === 1)
{
$Command = 'SequentialLoading';
}
else
{
$Command = strtok($_POST['URI'], $GLOBALS['Open_Bracket_a']);
}

if(require_once($GLOBALS['Site_Dir'].'Commands/'.$Command.'.php')){

$Commands_Json = json_decode($V->Commands_Jsons);
//print_r($Commands_Json);
//$V->Commands_Jsons = file_get_contents($GLOBALS['Site_Dir'].'Commands/Jsons/'.$Command.'.json');
//$V->Commands_Urls = file_get_contents($GLOBALS['Site_Dir'].'Commands/Urls/'.$Command.'.json');
unset($Command);
}
else
{
exit;
//fix error
}

//////////////////////////////////////////////////////////////////////
$_SESSION['Start_Timer'] = Micro_Timer(basename(__FILE__, '.php'), 0);