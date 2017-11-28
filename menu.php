<?php
include ('header.php');
?>

<?php


$isAdmin = false;

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
{
	$isAdmin = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

<table class="table" align="center" >
    <thead> 
        <tr>
            <th style="color: white"> ID </th>
            <th style="color: white"> Image</th>
            <th style="color: white"> Item </th>
            <th style="color: white"> Description </th>
            
            
        </tr>
    </thead>
  <?php 
	
	$conn = new mysqli('localhost','root','','login');
	
	$query = 'select id, image_name , item, type from items;';
	$result = $conn->query($query);
	$data = array();
	$have_data = false;
	
	if($result->num_rows > 0)
	{
		$have_data = true;
		
		while($row = $result->fetch_assoc())
		{
			$data[] = $row;
		}
	}
	else
	{
		$have_data = false;
	}
	
	
	$conn->close();

  ?>
 
<tbody>
	<?php
	
	if($have_data == true)
	{
		$id = 1;
		
		foreach($data as $row)
		{
			echo '<tr>';
			$i=0;
			
			foreach($row as $col)
			{
				switch($i)
				{
					case 0:
						echo '<td style="color: white;">'.$id.'</td>';
						$id++;
						break;
					case 2:
					case 3:
						echo '<td style="color: white;">'.$col.'</td>';
						break;
					
					case 1:
						echo '<td><a href="Modal_Includes/imagefile/'.$col.'"><img src="Modal_Includes/imagefile/'.$col.'" width="240" height="240" alt="" align="left" /></a></td>';
						break;
				}
				
				$i++;
			}
			
			echo '</tr>';
		}
	}
	else
	{
		echo '<tr><td colspan="4" class="text-center">No Data</td></tr>';
	}
	
	?>
    
</tbody>


</table>
		<?php
		
		if($isAdmin == true)
		{
			include_once ('Modal_Includes/Modal_Interface.php');
			
			echo '<button type="button" data-toggle="modal" data-target="#add_data">Add item</button>';
		}
			
			?>
          </div>
        </div>
      </div>
    </article>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Coffee House 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
