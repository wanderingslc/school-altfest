<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>antifest-home</title>
<link href="stylesheets/antistyles.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('graphics/anti_logo_over.jpg')">

<div class="container">
  <div class="header">
    <div class="center">
      <h1>&nbsp;<a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('anti_roll','','graphics/anti_logo_over.jpg',1)"><img src="graphics/anti_logo.jpg" alt="antifest logo and link to the home page" width="528" height="122" id="anti_roll"></a></h1>
    <!-- end .header --></div>
  </div>
  <div class="sidebar1"><a href="index.html">home</a><br>
    <a href="lineup.html">lineup</a><br>
    <a href="schedule.html">schedule</a><br>
    <a href="tickets.html">tickets</a><br>
    <a href="directions.html">directions </a><br>
  <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>antifest, home of the world's freest festival</h1>
    <p>antifest is an independent music festival that has been created to provide you with an opportunity to hear some of the best, independent music in the world. This is a grassroots festival. We do not accept corporate sponsorship so that we can continue to keep the music pure. </p>
    <h2>News</h2>
    <p>Next years lineup is already starting to take shape. We already have confirmation from a few of your favorite bands, including sloth child and black lab ... stay tuned for more. </p>
    <div id="promo">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="289" height="251" id="FLVPlayer">
        <param name="movie" value="FLVPlayer_Progressive.swf" />
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Halo_Skin_2&amp;streamName=media/antifest&amp;autoPlay=true&amp;autoRewind=true" />
        <param name="swfversion" value="8,0,0,0">
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="289" height="251">
          <!--<![endif]-->
          <param name="quality" value="high">
          <param name="wmode" value="opaque">
          <param name="scale" value="noscale">
          <param name="salign" value="lt">
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Halo_Skin_2&amp;streamName=media/antifest&amp;autoPlay=true&amp;autoRewind=true" />
          <param name="swfversion" value="8,0,0,0">
          <param name="expressinstall" value="Scripts/expressInstall.swf">
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
    </div>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
    <p><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<a href="mailto:info@antifest.com">&copy;copyright 2015, antifest, inc. </a><!-- #EndLibraryItem --></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>
