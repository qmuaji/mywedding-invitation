<!DOCTYPE html>
<html>
<head>
	<title>List RSVP - Wedding - Gitami & Risky 2018</title>
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<?php 
		require 'dodol.php';
		$sql="SELECT `nama_lengkap`,  `email`,  `hadir`,  `jumlah_hadir`,  LEFT(`pesan`, 256) AS `pesan` FROM `rsvp` ORDER BY `hadir` ASC";
		$result=mysqli_query($conn,$sql);


		$res = mysqli_query($conn,"SELECT sum(`jumlah_hadir`) FROM `rsvp` where `hadir` = 'Y'");
		$res_t = mysqli_query($conn,"SELECT sum(`jumlah_hadir`) FROM `rsvp` where `hadir` = 'N'");
		if (FALSE === ($res && $res_t)) die("Select sum failed: ".mysqli_error);
		$row = mysqli_fetch_row($res);
		$row_t = mysqli_fetch_row($res_t);
		$sum = $row[0];
		$sum_t = $row_t[0];
	?>
		<h3>List RSVP - Wedding - Gitami & Risky 2018</h3>		
			<table style="width:100%">
				<tr>
					<th>#</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Hadir?</th>
					<th>Qty</th>
					<th>Pesan</th>
				</tr>

			<?php 
			$no ='1';
			while($row=$result->fetch_object()){
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $row->nama_lengkap ?></td>
					<td><?php echo $row->email ?></td>
					<td><?php echo $row->hadir ?></td>
					<td align="right"><?php echo $row->jumlah_hadir ?></td>
					<td><?php echo $row->pesan ?></td>
				</tr>
				<?php
				$no ++;
			}
			?>  
				<tr>
					<th colspan="4" align="center">Jumlah Hadir</th>
					<th align="right"><?php echo $sum ?></th>
					<th></td>
				</tr>
				<tr>
					<th colspan="4" align="center">Jumlah Tidak Hadir</th>
					<th align="right"><?php echo $sum_t ?></th>
					<th></td>
				</tr>
			</table>
</body>
</html>
