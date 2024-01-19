<?php

ob_start();
include '../db.php';
?>

<select id="items" class="form-control" name="sltsubcat">
    <option>Select Sub Category</option> 
                <?php
                $q3=$_GET['q'];
             $qr1="select * from subcategory where Category='$q3'";
                $qr2=  mysqli_query($con, $qr1);
                while ($r2=  mysqli_fetch_array($qr2))
                {
                ?>
                <option value="<?php echo $r2['Id'];?>"><?php echo $r2['Subcategory'];?></option>
                <?php
                }
                ?>
            </select>
       