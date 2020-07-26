<?php
 include '../admin/includes/db.php';
 
$limit = 1;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
 echo $start_from;
$sql = "SELECT * FROM news ORDER BY nid ASC LIMIT $start_from, $limit";
 
$rs_result = mysqli_query($con, $sql);  

?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {  
?>  
            <h1><?=$row['title']?></h1>
<?php  
}
?>  
</tbody>  
</table>  