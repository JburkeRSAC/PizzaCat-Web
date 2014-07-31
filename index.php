<!-- Add the stylesheet to the head -->
<HTML><HEAD>
<link rel="stylesheet" type="text/css" href="/var/www/clippy.js/build/clippy.css" media="all">
</HEAD>

<!-- Add these scripts to  the bottom of the page -->
<!-- jQuery 1.7+ -->
<script src="/var/www/html/jquery/jquery.1.7.min.js"></script>

<!-- Clippy.js -->
<script src="/var/www/clippy.js/build/clippy.min.js"></script>

<CENTER><img src="images/pizzacatbanner.png"></CENTER>
<?php
/* PizzaCat Email Parser By Jburke@wapacklabs.com
                         ,.--..
                       ,:".   .'"V:.::..  .
                     ,::.'..  . . "VI:I:".':-.,.
                    ,I::. ..   .   'VHMHII:.::;:.:,..
                   :I:I:.. .   .    MHMHIHI:MHHI:I:'.:.
                   A:I::. ...  .   .MMHHIIHIHI:IHHII:.:,
                  .M:I::... ..   . AMMMMMHI::IHII::II.::.
                  IMA"::.:.. .    .MMMMMHHII:IMHIHIA:::"'
                  'MV.:.:.. .     AMMMMHMHI:I:HIHHIIIA;.
                   P.:.:.. .  .  .MMMMMMMHHIIMHHHIIHIIH.
                   :..:.. . .    AMMMMMMMHHI:AMIVHI:HIII:
                  ,:.:.. .  .    MMMMMMMMMH:IHHI:HHI:HIIH.
                  :..:...  .    .MMMHP:""''':HHIH:HHH:HIII
                 ;.:..:.. .     AMH:". ' ' ''":HII:HHH:HII:
                 ::..:.. . .   .H:'.. .     '".:VA:I:H::HI:
                ;.:.:... ..    A:.'...     .   ':HA:IHI::I:
               ,::..:. . .    .M::. .    .      ':HA:HH:II:.
               ;.::... ..     AML;,'       .    .:VHI:HI:I:;
              ,:.:.:. . .    .H. "PA,           .:IHH:HHII::.
             ,:.::... ..     A:I:::";, .   .  ,ILIIIH:HI:I:I;
            ,;:.:.:.. . .   .H:TP"VB')..   .,;T;,,::I:HI:I:::
           ,::.:.:.. . .    AI:.":IAAT:.  .(':BB');V::IH:I:I;
          ,::.:.:.. . .    .H:. ' . . ..  .":;AITP;I:IIH:I::;,
         ,::.::.:. . . .   A::.   . ..:.  .  . ..:AI:IHII:I::;.
         ;:.::.:.. .  .   AM:I:.   ..:.   .: . .::HIIIHIIHII::.
        ,:::.:.:..  .    .MM:I:..  .:,    .:.  .::HHIIIHIHII::'
       ,::.:..:.. .   .  AMM:I:.  . .'"-""''. ..::HIHI:HI:III:
       ;:.::..:.. . .   AMMM::. . ,,,, '..   '.::IMHIHIHIIHI::;
      ,:::.:..:. .   .  MMMM:I:.  ':::;;;::;' .::AMHIHIHHIHHI:"
      ;::.:.:.. . .   .:VMMV:A:. .  ':;,,."  .::AMMMIHIHHIHHII
     ;::.:.:.. ..  .  .::VM:IHA:. .''   ' . ..:AMMMMHIHHHIHHII:
     ;:::.:.. .  .. . .::P::IHHAA.. .   .. .:AMMMMMMMIIHHIHHI::
     ;::.:.. .  . .  ..:.:VIHHHIHHA::,,,,,:AMMMMMMMMMHIIHHHHII;
     ;.::.. .    . .  ..:.:VHHIHI:IHIHHIHI:MMMMMMMMMMHIHHIHHII:
     ::.:.. .     ..  ...:.::VHI:IIVIHIHII:MMMMMMMMMMMIHHIHHII:,
     ;:..:. .    ..  . ..:.::::VAII:IIIIII:MMMMMMMMMMMIHHIIHIIHI
     ';:.. .        . .. ..:...:.VII::III:.VMMMMMMMMMHIHHHIHI::I,
      ;:. . .    ' . .. ... . .::.::V::II:..VMMMMMMMMHIHHHIHI::I;
      ;:.. . .     . .. ..:..  .::...:VIITPL:VMMMMMMMVIHHHIH:. :;
      ;:. .  .    . .. ... .   ..:.:.. .:IIIA:.MMMMMVI:HIHIH:. .:
      I:. . .   . .. . .. . . . . ..:.. ..::IIA.VMMMVIHIIHIV:. .'
      I:..    . . .. .... .  .   . .. ... .:.:IA:.VMVIMHIHIH:..:
      I.. .  .  . ..... .       .  . .. . .. .:IIAV:HIMHHIHII:.'
      :. ..   . . .:.. .          .  .. ... ..::.:CVI:MHHIHHI...
      :..  . . .. ..:.               . . ... .:.:::VHA.VIHHMI:..
      :. .. .  . ..:..        . .     . .  ..  .. ...:VIIHIHI: .
      ':.. .  . .::. .       .::,.      .    .  . .  ...V:IHII..
       ;:.. .. .:I:.        ..:T"::.     .  . .  .  . .  .VIIH:.
       ;:.:.. .:I:..        .::V:::.         . . . .  .    VIII..
       ;:.. ..::::. .        ..::. .      .  . .. . .  .    VIII.
       I:.:.. .:I:.           ..:.'        . . .. :. .  .    "VI:.
       I::......::.  .                    . .. .:.:.:. .       "I:
       II::.. ..::. .       .    .      . .. .. .::::.. .      .:.
       II::.:. ..::. .  . .   .    .     .:. . .:I:::. .       .::HD
       'I:::.. .: . .. ..  .. . .     .  .::. . .:I:. .         .:V:
        I:. .. .  . . ... ..  .. . .    .. ..  ..::.             .:.
        I:.. .. .  ..:.. .. .. ..  . .      .   .                . :
        ;:.... . ..:::I:.. ..:.. ... .::. . ... . ..              .I.
        ::.:....::.::I:III:I::::I:II:I::.. .:.. . .:. .     .  . .AI:
        '::.:...:..::::::III::II::::::.. ...::. .  .::. . .. .  .AMMI.
         :::.:.:. ..::::III:II:I:::.:. .. ..::.. ..  ..::,.  ..::HMMI:
         ':::.:.. ...::I:::I:I:::.:.. :. . ..::.. . . . .'PTIHI:IIHHI:.
          ::I::.:...:::II:I::.:....:.:. . ...::. .  . .  .AI:IHI'':'  '.
          ':::.:... ..I::I::.:....:. .: .. ...::. .  .   III:II:.  '
           'I:::..:...:.::I::.:..:. .: .. . ..:... .  .  III.I'
            VI:::.::.::...:II::...:...:. . . .:::. . .   :''
            'HI:I::.::.::..:II::.:..:.... . .:.:I:.. .   :
             VI:I:I::.::.:...:I:::I:::.... ..:.:I::...   :
             'II:I::II:I:::.:.:I:III:I:... ....::::... .  :
              VII::I::I::.::..:.::II::.:.. . .:.::::. .   .
               VI:.:..::II:::..:..::.... .   ..::I::...  . .
               'I::.. ..::II::..:..::.... . ...::I:::.   .  .
                V::.:.. .:I:II::.:..::.. .. ...:::I::..  . . .
                I:::.:....::III:::.:..:.:.. .:.:II:::. .  . . .
                I::.:::...:::II::.:.:.:... ...:II::.. . . . .  .
                I::..:...:.:::.:.:.:.:..:.. .:II:. .. .    . .   .
               .::.:.:....:.:::.:.:.:.:.: . .:I:... . . . . .  .  .
               :.:.:...:.:.:::.::.:.::.... .:::.. .. .  . .  . .
              .:. ..:.:.:::.:..::.::.:.. . .::.. .. . . .  . . .   :
             .:. .:....::..:.:.:.:.:... .. .NI:.. . .. . . .  . .  :.
            .:. . . ..:.:.::.::.::.::.::.. . :.:.. .. .. . . . . . .)O
           .:.. ... .. ..:.::.::.:::.:..:.. . ..:.. .. .. . .. . . ,()
           ::.:. ...:.. ..:..::..::.:.:.:.:. .:.:... .. .. .:.. ..0OO.
          /:::.:...:.:..:..:..::.::.::.::..:..:.:..:.... ..:.:..:.()"'
        (0):::.::...:..:..:...::::I:.:I:.:.:.::.::..:.:...:..::O0O'.. .
         : ::.:..:.:..:.:..:.:I:.::I:::I:.:I::.I:.::..:.:.::.:/0O/.. .
        .:: ::I:.:..::.::.::.::I:::I::.:I::.::I::.:::.::.:I::( ):.:..  .
        ::I:."::.:.:..:.:.::::II::::II:::II::::II::::.::I::0OO::.:.    .
        ::I:::,('')OO::.:.::.::III:::III::III::I:::::.:I:"V0O:.' .   .
       .:::I::I::-:000::..:::.::::III:I::I::II::I:::IIII( ),) .    . . .
       .:.::I::II:I(,)(  )00):.::.::II:I:II:I:I:::III0OO".M:M.   . . .
*/
include('navbar.php');
?>
<link rel="stylesheet" href="toasty.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="jquery.toasty.js"></script>
<script>
    $(document).ready( function(){
        
        $("body").toasty();
 
        $("#toasty-button").click( function(){
             $("body").toasty('pop');
        });
 
    });
</script>
<body bgcolor="black">
<font color = #a71b02>
<center>
<BR>
<h1>Single File Upload Mode</h1>
<img src="/images/pizzacat.jpg" alt="Yo dawg! I heard you like pizza so I can haz putted a pizza ontop yo pizza" width="400" height="400">
<form accept-charset="utf-8" enctype="multipart/form-data" action="upload.php" method="POST">
<br>
<fieldset>
<input type="radio" name="TYPE" value="EMAIL">EMAIL
<input type="radio" name="TYPE" value="DOMAIN">DOMAIN
<input type="radio" name="TYPE" value="IP">IP
<input type="radio" name="TYPE" value="MD5">MD5
<input type="radio" name="TYPE" value="SHA1">SHA1<BR>
<input id="toasty-button" type="radio" name="TYPE" value="ALL">ALL PATTERNS<br>
<br><b>Please upload a plaintext file to extract data from:</b><br><br><input name="uploaded" type="file"/><br/>
<br><input type="submit" value="Upload" />
</fieldset>
</form> 

