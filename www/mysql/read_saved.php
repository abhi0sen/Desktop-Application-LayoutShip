<ul id="samp-sublist">
    <?php $result1 = mysqli_query($con, $query1);
    while ($arr1 = mysqli_fetch_array($result1)) { ?>
        <li class="cursor">
        <?php echo $arr1['Title'];
    }
    $id = $id + 1;
        ?>
        </li>
</ul>