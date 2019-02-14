

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
		@font-face {
			src: url(../assets/font/tayo.ttf);
			font-family: tayo;
		}
		@font-face {
			src: url(../assets/font/hiya.ttf);
			font-family: hiya;
		}

		h2{
			font-family: hiya;
			margin-top: -5px;
			margin-bottom: 30px;
			font-size: 40px;
		}

		table{
			font-family: tayo;
			font-size: 20px;
		}
		</style>
	</head>
	<body>
		<h2 align="center">Histori Pesanan</h2>
		<?= $this->session->flashdata('pesan'); ?>
		<table id="example" class="table table-hover table-stripped">
			<thead>
				<tr>
					<td>No</td>
					<td>No. Nota</td>
					<td>Nama Pembeli</td>
					<td>Tanggal Beli</td>
					<td>Grand Total</td>
					<!-- <td>Detail</td> -->
				</tr>
			</thead>
			<tbody>
				<?php $no=0; foreach($tampil_pesanan as $psn):
				$no++; ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $psn->id_transaksi ?></td>
					<td><?= $psn->nama_pembeli ?></td>
					<td><?= $psn->tanggal_beli ?></td>
					<td><?= $psn->total ?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</body>
</html>
