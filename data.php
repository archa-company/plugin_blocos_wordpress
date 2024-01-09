<?php
define('__IPMFGBHOME__',substr(__DIR__,0,strpos(__DIR__,'wp-content')));
require __IPMFGBHOME__.'wp-load.php';
require __IPMFGBHOME__.'wp-admin/includes/admin.php';
require 'vendor/autoload.php';
use Aws\Iam\IamClient;
use Aws\Exception\AwsException;
$error=false;
$message='Enviado com sucesso!';
if(isset($_POST["category"])&&isset($_POST["data"])&&trim(get_option('fbg-plugin-bucket',''))){
 $auth=[
  'region'=>get_option('fbg-plugin-region','us-east-1'),
  'version'=>'latest'
 ];
 if(!!trim(get_option('fbg-plugin-accesskey',''))&&!!trim(get_option('fbg-plugin-secretkey','')))
  $auth['credentials']=[
   'key'=>trim(get_option('fbg-plugin-accesskey','')),
   'secret'=>trim(get_option('fbg-plugin-secretkey',''))
  ];
 $s3client=new Aws\S3\S3Client($auth);
 $cat=json_encode(get_category(explode(';',$_POST["category"])[0]));
 try{
  $s3client->putObject([
   'Bucket'=>trim(get_option('fbg-plugin-bucket','')),
   'ACL'=>'public-read',
   'ContentType'=>'application/json',
   'Key'=>trim(get_option('fbg-plugin-path','')).'/'.explode(';',$_POST["category"])[1].'.json',
   'Body'=>'{"category":'.$cat.',"data":'.str_replace('\\"','"',$_POST["data"]).',"isDefault":'.(isset($_POST["isDefault"])?'true':'false').',"title":'.(isset($_POST["isAuthor"])?'null':'"'.$_POST["title"].'"').'}'
  ]);
 }catch(Exception $exception){
  $message='Erro na criação dos dados';
  $error=true;
 }
}else{
 $message='Faltaram dados para a execução da tarefa';
 $error=true;
}
header('Location: '.get_site_url()."/wp-admin/?page=content-sponsorships&m=$message".($error?'&e=1':''));
?>