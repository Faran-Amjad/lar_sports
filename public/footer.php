<html>
<body>
	<hr style="border: 2px solid red;" />
<div id="images">
      <!--<hr style="border: 2px solid red;" />-->
      <?php  displayimage(); ?>
    </div>

</body>
</html>

<script>
	<?php
function displayimage()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from images";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
        echo'<td>'; echo '<img height="200" width="200" src="data:image;base64,'.$row[3].'" >'; echo'</td>';
        $c++;
        if($c==4 || $c==8)
        { 
          echo '</tr>'.'<tr>';
        } 
        else
        {

        }
      }

      echo'<tr>
      </table>';
    }
?>
</script>
