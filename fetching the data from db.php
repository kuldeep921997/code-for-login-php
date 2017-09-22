<body>
   <?php
 $con = mysql_connect ("localhost", "root", "");
 mysql_select_db ("db_test", $con);

  if (!$con)
    { 
    die ("Could not connect: " . mysql_error());
    } 
    $sql = mysql_query("SELECT * FROM Liam WHERE Description LIKE '%term%'") or die
        (mysql_error());

       while ($row = mysql_fetch_array($sql)){
    echo 'Primary key: ' .$row['PRIMARYKEY'];
    echo '<br /> Code: ' .$row['Code'];
    echo '<br /> Description: '.$row['Description'];
    echo '<br /> Category: '.$row['Category'];
    echo '<br /> Cut Size: '.$row['CutSize']; 
  }

  mysql_close($con)
   ?>
     </body>
