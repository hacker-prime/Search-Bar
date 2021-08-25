<?php

include("productDB.php");

if(isset($_GET['q']))
{
$q=$_GET['q'];
$q=mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);
$sql="select * from food where name='$q' or name like '%$q' or name like '$q%' or name like '%$q%'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    ?>
    <ul class="searchList" style="list-style: none">
    <?php
while($x=mysqli_fetch_assoc($res))
{
?>
<a href="productDisplay.php?id=<?php echo $x['id']?>"><li class="collection-item col l12">
<!-- You can add here link to post -->
<p class='blue-text'><?php echo $x['name'];?></p>
<!-- Add here more field like author photo, views, comments -->
<span class='grey-text' style="text-decoration: underline;"><?php echo $x['username'];?></span>
</li>
</a>
<?php
}
?>
</ul>
<?php
}
else
{
    echo "<p class='noData'>Sorry, No data found</p>";
}
}
else
{
    echo "<p class='black-text'>Bad Request</p>";
}
?>
