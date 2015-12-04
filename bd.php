<html>
<body>
<table border="1">
<tr><td>secu</td><td>etu</td><td>nom</td><td>prenom</td></tr>
<?php
$vHost="91.121.160.11";
$vDbname="utc012";
$vPort="5432";
$vUser="utc012";
$vPassword="Xenaubenules";
$vConn = pg_connect("host=$vHost port=$vPort dbname=$vDbname user=$vUser password=$vPassword");
$vSql = "SELECT pk_numsecu, k_numetu, nom, prenom FROM tetu;";
$vQuery = pg_query($vConn,$vSql);
while ($vResult = pg_fetch_array($vQuery, null, PGSQL_ASSOC)) {
  echo "<tr>";
  echo "<td>$vResult[pk_numsecu]</td>";
  echo "<td>$vResult[k_numetu]</td>";
  echo "<td>$vResult[nom]</td>";
  echo "<td>$vResult[prenom]</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
