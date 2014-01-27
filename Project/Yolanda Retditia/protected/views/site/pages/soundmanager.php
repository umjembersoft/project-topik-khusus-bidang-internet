<div class=’adsense’ style=’ padding:5px;margin-bottom:2px;margin-top:2px; float:center;background:#000000 top repeat-x; border:1px solid #FFFFFF;-moz-border-radius:5px;-webkit-border-radius:5px;’>
<div align=’center’ style=’padding:5px 5px 0 5px;’>
 <table width=”100%”>
  <tr>
    <td>
    <br/>
<p><a href=”mp3/1.mp3″ id=”singlePlayer_1″>boyfriend - boy friend</a></p>
<p><a href=”mp3/2.mp3″ id=”singlePlayer_2″>snsd-the boys</a></p>
<p><a href=”mp3/3.mp3″ id=”singlePlayer_3″>SS501 - Love Ya</a></p>
<p><a href=”mp3/4.mp3″ id=”singlePlayer_4″>sistar - push push</a></p>
<p><a href=”mp3/5.mp3″ id=”singlePlayer_5″>nobody english version wonder girl</a></p>
<p><a href=”mp3/6.mp3″ id=”singlePlayer_6″>Girls's Generation - Gee</a></p>
<p><a href=”mp3/7.mp3″ id=”singlePlayer_7″>Super Junior-miracle</a></p>
<p><a href=”mp3/8.mp3″ id=”singlePlayer_8″>super junior - no other</a></p>
<p><a href=”mp3/9.mp3″ id=”singlePlayer_9″>BBF-because i'm stupid</a></p>
<p><a href=”mp3/10.mp3″ id=”singlePlayer_10″>2pm-hands up</a></p>
<p><a href=”mp3/11.mp3″ id=”singlePlayer_11″>mp3jay~1</a></p>
<p><a href=”mp3/12.mp3″ id=”singlePlayer_12″>A Pink - MY MY</a></p>
    </td>

</tr>
</table></div></div>
<?php
$this->widget(“ext.SoundManager.ESoundManagerSimplePlayList”, array(“playListId”=>”playList1″, “playListClass”=>”list1″, “autoPlay”=>false, “autoNext”=>true, “playCallback”=>”onPlay”, “stopCallback”=>”onStop”, “pauseCallback”=>”onPause”, “resumeCallback”=>”onResume”, “finishCallback”=>”onFinish”));
 
// Javascript to handle play event of the player
$script = <<<EOD
  function onPlay(){
     alert(“Play: ” + playList1.currentPlayerId); // playList1 is the id of the playlist parameter when we create the widget
  }
 
  function onStop(){
     alert(“Stop: ” + playList1.currentPlayerId); // playList1 is the id of the playlist parameter when we create the widget
  }
 
  function onPause(){
     alert(“Pause: ” + playList1.currentPlayerId); // playList1 is the id of the playlist parameter when we create the widget
  }
 
  function onResume(){
     alert(“Resume: ” + playList1.currentPlayerId); // playList1 is the id of the playlist parameter when we create the widget
  }
 
  function onFinish(){
     alert(“Finish: ” + playList1.currentPlayerId); // playList1 is the id of the playlist parameter when we create the widget
  }
EOD;
 
Yii::app()->clientScript->registerScript(“playListEventHandler”, $script);


?>