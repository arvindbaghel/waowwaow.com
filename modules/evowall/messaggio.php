<?php
require_once('../../../inc/header.inc.php');
require_once(BX_DIRECTORY_PATH_INC.'design.inc.php');
require_once(BX_DIRECTORY_PATH_INC.'profiles.inc.php');
require_once(BX_DIRECTORY_PATH_INC.'utils.inc.php');
include BX_DIRECTORY_PATH_MODULES.'ibdw/evowall/config.php';

$accountidverifica=(int)$_COOKIE['memberID'];
$accountid=$_POST['user'];
$profileid=$_POST['riceve'];
$messaggio=strip_tags($_POST['messaggio'],'\n');
$ultimoid=$_POST['ultimoid'];
$newline=$_POST['newline'];
if ($newline=="on") $messaggio=str_replace("\n", "<br/>",$messaggio);
$pagina=$_POST['pagina'];  
if ($accountid==$accountidverifica) 
{
 mysql_query("SET NAMES 'utf8'");
 //il nickname del sender
 $aInfomember1=getProfileInfo($invia);
 
 if($usernameformat=='Nickname') $miosendernick=$aInfomember1['NickName'];
 elseif($usernameformat=='FirstName') $miosendernick=$aInfomember1['FirstName'];
 elseif($usernameformat=='Full name') $miosendernick=$aInfomember1['FirstName']." ".$aInfomember1['LastName'];
 $miosenderlink=$aInfomember1['NickName'];
 
 if ($accountid!=$profileid)
 {
  //il nickname del recipient
  $aInfomember2=getProfileInfo($profileid);
  if($usernameformat=='Nickname') $miorecipientnick=$aInfomember2['NickName'];
  elseif($usernameformat=='FirstName') $miorecipientnick=$aInfomember2['FirstName'];
  elseif($usernameformat=='Full name') $miorecipientnick=$aInfomember2['FirstName']." ".$aInfomember2['LastName'];
  $miorecipientlink=$aInfomember2['NickName'];
  $reciver=$profileid;
  $langs="_ibdw_evowall_bx_evowall_message";
 }
 else 
 {
  $miorecipientnick=0;
  $miorecipientlink=0;
  $reciver=$profileid;
  $langs="_ibdw_evowall_bx_evowall_messageseitu"; 
 } 
 
 
 $array["sender_p_link"]=BX_DOL_URL_ROOT.$miosenderlink;
 $array["sender_p_nick"]=$miosendernick;
 $array["recipient_p_link"]=BX_DOL_URL_ROOT.$miorecipientlink;
 $array["recipient_p_nick"]=$miorecipientnick;
 $array["messaggioo"]=$messaggio;
 $str=serialize($array);
 if ($accountid!=$profileid) $query="INSERT INTO bx_spy_data (sender_id,recipient_id,lang_key,params,type) VALUES ('".$accountid."','".$reciver."','".$langs."','".$str."','profiles_activity')";
 else $query="INSERT INTO bx_spy_data (sender_id,lang_key,params,type) VALUES ('".$accountid."','".$langs."','".$str."','profiles_activity')";
 $result=mysql_query($query);
 include BX_DIRECTORY_PATH_MODULES.'ibdw/evowall/config.php';
 include 'templatesw.php';
 $cont=$limite+1;
 $parami=0;
 $paramf=$limite;

 //DETERMINIAMO LA PAGINA IN CUI CI TROVIAMO
 if (strpos($pagina,'index.php') or $pagina=='/') $miapag="home";
 elseif (strpos($pagina,'member.php')) $miapag="account";
 else $miapag="profile";
 include 'masterquery.php';
 $result=mysql_query($query);
 $contazioni=mysql_num_rows($result);
 $titolocommenti=_t('_ibdw_evowall_comment_title');
 $titolocommenti_2=_t('_ibdw_evowall_comment_title_first');
 $idn=0;
 echo '<div id="correzione">';
 echo '<div id="updateajax" style="display:none;"></div>';
 if($welcome=='on' AND (int)$_COOKIE['memberID']==getID($_REQUEST['ID'])) include 'welcome.php';
 include 'basecore.php';
 include 'controllo.php';
 if ($contazioni>$limite) 
 {
  $inizio=$contazioni; 
  echo '<div id="altrenews"></div>';
  $paginaajax=str_replace("?", "",$pagina);
  $paginaajax=str_replace("/","",$paginaajax);
  echo '<div id="altro">';
  include 'bottonealtrenews.php';
  echo '</div>';
 }
 
 if($AllowMessageNotification=="on" and $langs=="_ibdw_evowall_bx_evowall_message") 
 {
 //invio email
 bx_import('BxDolEmailTemplates');
 $oEmailTemplate = new BxDolEmailTemplates();
 $aTemplate = $oEmailTemplate -> getTemplate(_ibdw_evowall_bx_evowall_message);
 $infoamico=getProfileInfo($reciver);
 $aInfomembers=getProfileInfo($accountid);
 $usermailadd=trim($infoamico['Email']);
 $sitenameis=getParam('site_title');
 if($usernameformat=='Nickname') 
 {
  $execactionname=$infoamico['NickName'];
  $authorname=$aInfomembers['NickName'];
 }
 elseif($usernameformat=='FirstName') 
 {
  $execactionname=$infoamico['FirstName'];
  $authorname=$aInfomembers['FirstName'];
 }
 elseif($usernameformat=='Full name') 
 {
  $execactionname=$infoamico['FirstName']." ".$infoamico['LastName'];
  $authorname=$aInfomembers['FirstName']." ".$aInfomembers['LastName'];
 }
 $aTemplate['Body']=str_replace('<SiteName>',$sitenameis,$aTemplate['Body']);
 $aTemplate['Body']=str_replace('<SenderNickName>',$authorname,$aTemplate['Body']);
 $aTemplate['Body']=str_replace('<RecipientNickName>',$execactionname,$aTemplate['Body']);
 $aTemplate['Body']=str_replace('<PersonalMessage>', htmlentities($messaggio,ENT_COMPAT, 'UTF-8'),$aTemplate['Body']);
 $aTemplate['Body']=str_replace('{post}',$pageaddress,$aTemplate['Body']);
 $aTemplate['Subject']=str_replace('<SenderNickName>',$authorname,$aTemplate['Subject']);
 if ($infoamico['EmailNotify']==1) sendMail($usermailadd, $aTemplate['Subject'], $aTemplate['Body'],$reciver, 'html');
 //fine invio email
}
 
}
?>