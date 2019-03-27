<!DOCTYPE html>
<html>
<head>
	<title>List Tidak Hadir - Wedding - Gitami & Risky 2018</title>
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
		include 'dodol.php';
		$sql="SELECT `nama_lengkap`, `email`, `jumlah_hadir`, left(`rsvp`.`pesan`,256) AS `pesan` FROM `rsvp` WHERE `hadir` = 'N'";
		$result=mysqli_query($conn,$sql);


		$res = mysqli_query($conn,"SELECT sum(`jumlah_hadir`) FROM `rsvp` where `hadir` = 'N'");
		if (FALSE === $res) die("Select sum failed: ".mysqli_error);
		$row = mysqli_fetch_row($res);
		$sum = $row[0];
	?>
		<h3>List Tidak Hadir</h3>		
			<table style="width:100%">
				<tr>
					<th>#</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Jumlah</th>
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
					<td align="right"><?php echo $row->jumlah_hadir ?></td>
					<td><?php echo $row->pesan ?></td>
				</tr>
				<?php
				$no ++;
			}
			?>
				<tr>
					<td colspan="3" align="center"><b>Total</b></td>
					<td align="right"><?php echo $sum ?>	</td>
					<td></td>
				</tr>
			</table>
</body>
</html>
