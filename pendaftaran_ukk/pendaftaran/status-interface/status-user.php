<?php
$host = mysqli_connect("localhost","root","","ukk");
$query = mysqli_query($host,'SELECT * FROM form');
?>
<table cellpadding="5" cellspacing="0" border="1">
    <tr>
        <th>NAME PENDAFTARAN</th>
        <th>ASAL SEKOLAH</th>
        <th>NISN</th>
        <th>JENIS KELAMIN</th>
        <th>TTL</th>
        <th>NO HP</th>
        <th>NO SKHU</th>
        <th>ALAMAT</th>
        <th>ID</th>
        <th>FOTO</th>


    </tr>
    <?php 
            while($row = mysqli_fetch_array($query))
             {
               ?> 
    <tr>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['asalsekolah']?></td>
        <td><?php echo $row['nisn']?></td>
        <td><?php echo $row['jk']?></td>
        <td><?php echo $row['ttl']?></td>
        <td><?php echo $row['nohp']?></td>
        <td><?php echo $row['noskhu']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['id']?></td>
        <td><img src="<?php echo $row['foto']?>" width ="100px"></td>
    </tr>  
    <?php 
   }
   ?>
</table>