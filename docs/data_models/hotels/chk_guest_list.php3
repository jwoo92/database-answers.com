<HTML>
<head>
<title>Guest List</title>
</head>

<body text="#202020">

<table width=80%>
<tr>
<td align=left valign=top>
<img alt="Database Answers Header" height=58 width=400 src="../../images/dba_banner_and_btn_400.jpg">
</td>
<td align=right valign=top>
<img alt="Chateau Laurier Hotel, Ottawa, Canada" src="../../images/chateau_laurier_xsml.jpg">
</td>
</tr>
</table>

<table bgcolor="#6699FF" border=0 width=80%>
<tr>
<td align=left colspan=1 valign=TOP width=40>
<a href="../../index.html"><font color=white face=Verdana size=1>Home</a>
</td>
<td align=left valign=top width=100><a href="../../ask_a_question.html"><font color=white face=Verdana size=1>Ask a Question</a>
</td><td align=left valign=top width=85>
<a href="../../data_models/index.html"><font color=white face=Verdana size=1>Data Models</a>
</td><td align=left valign=top width=50>
<a href="../../faqs.html"><font color=white face=Verdana size=1>FAQs</a>
</td><td align=left valign=top width=75>
<a href="../../sql_scripts/index.html"><font color=white face=Verdana size=1>SQL Scripts</a>
</td><td align=left valign=top width=50>
<a href="../../site_map.html"><font color=white face=Verdana size=1>Search</a>
</td><td align=left valign=top width=62>
<a href="../../site_map.html"><font color=white face=Verdana size=1>Site Map</a>
</td>
<td align=right valign=top>&nbsp
<font color=white face="Verdana" size="1"><SCRIPT</td>
</tr>

</table>

<font color=red face="Comic Sans MS" size=4><b>Guest List</b></font>

<font color=blue face=Verdana size=2>
<!-- end Standard Header - Version 3-->

<!-- begin body Text -->
<P>This Page is a simple demo of MySQL and PHP3 to display a Guest List from the GUESTS Table in the barrysdb Database ...
<br>If you would like the Code and details of how to use it, please <a href="mailto:info@databaseanswers.com">Email Me.</a>
<P>
<center>
<TABLE>
<Table border>
<tr valign="bottom">
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2>Guest Name</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2>Nr.</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2>Guest Address</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2>City</font></td>
<td align=middle bgcolor=blue><font color=white face="Verdana" size=2>Country</font></td>
</tr>

<?
 include( 'database.php3');

 mysql_connect($hostname, $username, $password) OR DIE( "Unable to connect to database");
 @mysql_select_db(  "$dbName") or die(  "Unable to select database");

 $query =  "select * from GUESTS ORDER BY GUEST_NAME;";
 $result = MYSQL_QUERY($query);

while ($row = mysql_fetch_array ($result))
{
   print ("<tr>\n");
   print ("<td bgcolor=#6699FF>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[GUEST_NAME]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td align=middle bgcolor=#6699FF>\n");
   print ("<font color=white face=Verdana size=1><b>\n");
   printf ("%s", $row[GUEST_NUMBER]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td bgcolor=#6699FF>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[GUEST_ADDRESS]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td bgcolor=#6699FF>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[GUEST_CITY]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");

   print ("<td align=right bgcolor=#6699FF>\n");
   print ("<font color=white face=Verdana, Verdana, Helvetica size=1><b>\n");
   printf ("%s", $row[COUNTRY_CODE]);
   print ("</font>");
   print ("</a>\n");
   print ("</td>\n");
   print ("</tr>\n");

}

?>

</table>

</center>

<br>End of Computer-Generated (PHP3/MySQL) Guest List.
<hr>

</body>
</HTML>
