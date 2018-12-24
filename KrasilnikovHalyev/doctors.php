<html>
 <head>
  <title>Welcome!</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every book:</P> %s',"\n");

	
	$link = mysqli_connect('10.14.129.132', 'KrasilnikovEgor','qmBsLnFN','KrasilnikovEgorDB')
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	$SQLquery = 'SELECT * FROM doctor';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>Family name</TH> %s',"\n");
	printf('	<TH>Name</TH> %s',"\n");
	printf('	<TH>Merits</TH>%s',"\n")
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD> %s </TD> <TD> %s </TD> ',$result[1],$result[2]$result[4]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<a href = "index.html"> <P>GO BACK</P> </a>
</body>
</html>