<?php

$usuario = $_GET['usuario'];
$admin = $_GET['admin'];
$motivo = $_GET['motivo'];

$url = "https://discord.com/api/webhooks/958113242385874984/YB1MNmkAYAT_m4bJ-4cHQRjfX1DP9sljDZaYxmB9B7n67Vq3qWKMWdJqLqzUnJznJ-g9";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '
{
   "username": "🚁| PANEL LOGS",

   "avatar_url": "",
  "content": "",
  "embeds": [
    {
      "title": "NUEVO CK!!",
      "color": 16384000,
      "description": "\n**🚧 USUARIO 🚧 **\n\n**'.$usuario.'**\n\n**🚧 ADMIN 🚧 **\n\n**'.$admin.'**\n\n**🚧 MOTIVO 🚧 **\n\n**'.$motivo.'**\n\n",
      "timestamp": "",
      "author": {
        "name": "",
        "url": "https://media.discordapp.net/attachments/794598834231050290/806274828734431246/gifdiscord.gif",
        "icon_url": "https://media.discordapp.net/attachments/794598834231050290/806274828734431246/gifdiscord.gif"
      },
      "image": {},
      "thumbnail": {},
      "footer": {},
      "fields": []
    }
  ],
  "components": []

}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

