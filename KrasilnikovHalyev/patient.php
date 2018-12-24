<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<P style="color:red; font-size:18">
	Welcome to the Slepcova Valentina National Library!<BR>
	<BR>
	Please feel free to browse thorugh the site.
	</P>
 	<meta charset="utf-8">
	
	<table width="100%" cellspacing="0" border="1">	
		<TR>
			<TH>Table column 1</TH>
			<TH>Table column 2</TH>
		</TR>
		<TR>
			<TD>
			  <a href="allbooks.php"> <P>All books</P> </a>
			  <a href="dostojevsky.php"> <P>Books of Dostojevsky</P> </a>
			  <a href="add_book.php"> <P>Add new Book</P> </a> 
			  <a href="users.php"> <P>Our Staff</P> </a>
			  <a href="authors.php"> <P>Authors</P> </a> 
			</TD>
			<TD>
			  <P>Add New Book:</P>
			  <form action="add_book_form_action.php" method="post">
          		  	Title: <input type="text" name="book_title">
          		  	<br>
				Year: <input type="number" name="book_year">
          		  	<br>
				Author: 
				<select name="book_authorid">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT AuthorID, CONCAT(FirstName, \' \', FamilyName) FROM authors';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
				<br>
            		  	<input type="submit" value="Add Book">
      			  </form>
			</TD>
		</TR>

 </body>
</html>