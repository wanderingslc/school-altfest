<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>antifest-directions</title>
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
    <a href="lineup.php">lineup</a><br>
    <a href="schedule.php">schedule</a><br>
    <a href="tickets.php">tickets</a><br>
    <a href="directions.php">directions </a><br>
  <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>Instructions</h1>
    <p>Be aware that the CSS for these layouts is heavily commented. If you do most of your work in Design view, have a peek at the code to get tips on working with the CSS for the liquid layouts. You can remove these comments before you launch your site. To learn more about the techniques used in these CSS Layouts, read this article at Adobe's Developer Center - <a href="http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>.</p>
    <h2>Clearing Method</h2>
    <p>Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule.  This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you'll need to use a different clearing method. The most reliable will be to add a &lt;br class=&quot;clearfloat&quot; /&gt; or &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; after your final floated column (but before the .container closes). This will have the same clearing effect.</p>
    <h3>Logo Replacement</h3>
    <p>An image placeholder was used in this layout in the .header where you'll likely want to place  a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. </p>
    <p> Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. </p>
    <p>To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there.)</p>
    <h4>Internet Explorer Conditional Comments</h4>
    <p>These liquid layouts contain an Internet Explorer Conditional Comment (IECC) to correct two issues. </p>
    <ol>
      <li>Browsers are inconsistent in the way they round div sizes in percent-based layouts. If the browser must render a number like 144.5px or 564.5px, they have to round it to the nearest whole number. Safari and Opera round down, Internet Explorer rounds up and Firefox rounds one column up and one down filling the container completely. These rounding issues can cause inconsistencies in some layouts. In this IECC there is a 1px negative margin to fix IE. You may move it to any of the columns (and on either the left or right) to suit your layout needs.</li>
      <li>The zoom property was added to the anchor within the navigation list since, in some cases, extra white space will be rendered in IE6 and IE7. Zoom gives IE its proprietary hasLayout property to fix this issue.</li>
    </ol>
    <h4>Backgrounds</h4>
    <p>By nature, the background color on any div will only show for the length of the content. This means if you're using a background color or border to create the look of a side column, it won't extend all the way to the footer but will stop when the content ends. If the .content div will always contain more content, you can place a border on the .content div to divide it from the column.</p>
    <!-- end .content --></div>
  <div class="footer">
    <p><!-- #BeginLibraryItem "/Library/footer.lbi" --> <a href="mailto:info@antifest.com">&copy;copyright 2015, antifest, inc. </a><!-- #EndLibraryItem --></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
