 <?php
  

function send_LINE($msg){
 $access_token = 'xR2F7TD2ODHLJyAeJMFx0Od6i/zDtXSUWA68epzIJ8tFcoUQC093ZW0KuALJrwzLykeCdmlyWXeJz3dgSE48NVzVUVYBmss2fLORsE++nRLkQ1PZfOI6mruhrndqUheuFCT9bqHG71YYvVvr4x/OawdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v1/oauth/verify';
      $data = [

        'to' => 'https://qr-official.line.me/sid/L/977skcrt.png',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
