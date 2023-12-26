<HTML><head><title>Document Publication</title>
</head>

<body text="#202020">

<table bgcolor=blue width=90%>
<tr>
<td align=left valign=top>
<img alt="Database Answers Header" height=67 width=417 src="../../images/ivans_dba_logo_alt.jpg">
</td>
<td align=right rowspan=2 valign=top>
<img alt="Pier at Cannes" height=88 width=188 src="../../images/philg/cannespier_xsml.jpg">
</td>
</tr>
</table>

<font color=blue face=Verdana size=2>
<!-- end Standard Header - Version 3-->

<table bgcolor="#0000FF" width=90%>
<tr>
<td align=left colspan=1 valign=TOP width=63>
<a href="../../index.html"><img alt="Home" border=0 src="../../images/buttons/button_studio/home.gif"></a>
</td>
<td align=left valign=top width=120>
<a href="../../ask_a_question_rbw.php3">
<img alt="Ask a Question" border=0 src="../../images/buttons/button_studio/ask_a_question.gif"></a>
</td>
<td align=left valign=top width=85>
<a href="../../data_models/index.html">
<img alt="Data Models" border=0 src="../../images/buttons/button_studio/data_models_on.gif"></a>
</td><td align=left valign=top width=72>
<a href="../../faqs.html"><img alt="FAQs" border=0 src="../../images/buttons/button_studio/faqs.gif"></a>
</td>
<td align=left valign=top width=74>
<a href="../../search.html"><img alt="Search" border=0 src="../../images/buttons/button_studio/search.gif"></a>
</td><td align=left valign=top wiidth=62>
<a href="../../site_map.html"><img alt="Site Map" border=0 src="../../images/buttons/button_studio/site_map.gif"></a></td>
<td align=right valign=top><font color=white face="Verdana" size="1">&nbsp</td>
</tr>

</table>



<font color=blue face=Verdana size=2>

<table bgcolor="#98CEFD" border=0 width=90%>
<!---
<tr>
<td align=middle bgcolor="white" colspan=3 valign=top>
<font color=white face=Verdana size=2>&nbsp</td>
</tr>
--->

<tr>
<td align=middle bgcolor="6699FF" colspan=3 valign=top>
<font color=white face=Verdana size=2>
<b>This is a list of the Documents available in the 'documents' Table in the Database</b>
</td>
</tr>




<tr><td>

<center>
<TABLE>
<table border=1 cellpadding=3 CELLSPACING=3>
<tr valign="top">
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2><b>Type</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2><b>Document Code</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2><b>Title</font></td>
</tr>

<!---   printf ("%s", $row[question_date]); --->

<?
 include( 'database.php3');

 mysql_connect($hostname, $username, $password) OR DIE( "Unable to connect to database");
 @mysql_select_db(  "$dbName") or die(  "Unable to select database");

 $query =  "SELECT document_type_code,document_code,document_title FROM documents ORDER BY document_type_code,document_code;";
 $result = MYSQL_QUERY($query);

while ($row = mysql_fetch_array ($result))
{
   print ("<tr valign=top >\n");

   print ("<td bgcolor=#004098>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[document_type_code]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td bgcolor=blue>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[document_code]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td align=left bgcolor=blue>\n");
   print ("<font color=white face=Verdana size=1><b>\n");
   printf ("%s", $row[document_title]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("</tr>\n");
}

?>

</table>
</td></tr>
</table>

</center>

<br>End of Computer-Generated (PHP3/MySQL) List of Documents in barrysdb.
<!---
   print ("<tr valign=top >\n");

   print ("<td align=left bgcolor=blue colspan=6>\n");
   print ("<font color=white face=Verdana size=1><b>\n");
   printf ("%s", $row[comments]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("</tr>\n");
--->


<hr>

</body>
</HTML>
