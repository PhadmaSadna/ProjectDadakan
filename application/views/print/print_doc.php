<?php
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=document_name.doc");
?>

<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;
			width: 700px;
		}
		table td {
			word-wrap:break-word;
			
		}
	</style>
</head>
<body>
	<div align="center">
		
		<table border="0">
	    	<!-- Baris Pertama Bagian Kop Surat-->
	    	<tr>
	    		<td style="width: 20px"></td>
	    		<td colspan="2" align="right" style="width: 50px">
	    			<img width="25px" src="<?php echo site_url('resources/img/logo.jpeg');?>">
	    		</td>
	    		<td colspan="2" align="center" style="width: 550">
	    			<b>PEMERINTAH KABUPATEN TEXAS </b><br>
	    			<b>KECAMATAN NEW TEXAS </b><br>
	    			<b>DESA BIKINI BUTTOM </b><br>
	    			<b>Jl. Rumah Spongebob No. 212, Kode Pos 50001</b>
	    		</td>
	    		<td style="width: 20px"></td>
	    	</tr>
	    	<!-- Baris Garis Hitam dibawah Kop -->
	    	<tr>
	    		<td colspan="6" align="center">
	    			<hr style="width: 80%; color: #000000;">
	    		</td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="40px">
	    		<td colspan="6"><br><br><br></td>
	    	</tr>
	    	<!-- Baris Judul Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="center">
	    			<?php foreach($surat as $s){ ?>
	    			<b>SURAT KETERANGAN <?php echo $s['keterangan']; ?></b><br>
	    			<?php } ?>
	    			<?php foreach($masyarakat as $d){ ?>
	    			Nomor : <?php echo $d['no_surat']; ?>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="40px">
	    		<td colspan="6"><br><br></td>
	    	</tr>
	    	<!-- Baris Pembukaan Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="left">
	    			<p>
	    				Yang bertanda tangan dibawah ini Kepala Desa Bikini Buttom Kecamatan Texas New Kabupaten Texas
	    			</p>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="30px">
	    		<td colspan="6"><br><br></td>
	    	</tr>
	    	<!-- Baris Isi Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="left">
	    			Yang bertanda tangan di bawah ini: <br>
	    			&nbsp;
	    			<table border="0" style="width: 500px">
	    				<tr>
	    					<td width="200px">Nama</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['nama']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Tempat, Tanggal Lahir</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['tempat_lhr']; ?>, <?php echo $d['tanggal_lhr']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Jenis Kelamin</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['jenkel']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Agama</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['agama']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Status Perkawinan</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['status_perkawinan']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Pekerjaan</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['pekerjaan']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Alamat</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['alamat']; ?></td>
	    				</tr>
	    				<tr>
	    					<td width="200px">Nama Orang Tua</td>
	    					<td width="10px">:</td>
	    					<td width="290px"><?php echo $d['nama_ortu']; ?></td>
	    				</tr>
	    			</table>
	    			<br>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="30px">
	    		<td colspan="6"><br><br></td>
	    	</tr>
	    	<!-- Baris Isi Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="left">
	    			<p>
	    				<?php echo $d['ket_1']; ?>
	    			</p>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="30px">
	    		<td colspan="6"><br><br></td>
	    	</tr>
	    	<!-- Baris Isi Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="left">
	    			<p>
	    				<?php echo $d['ket_2']; ?>
	    			</p>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="30px">
	    		<td colspan="6"><br><br></td>
	    	</tr>
	    	<!-- Baris Penutup Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="4" align="left">
	    			<p>
	    				Demikian surat keterangan ini dibuat dengan sebenarnya untuk yang bersangkutan dan kiranya dipergunakan seperlunya.
	    			</p>
	    		</td>
	    		<td></td>
	    	</tr>
	    	<!-- Baris Space -->
	    	<tr height="40px">
	    		<td colspan="6"><br><br><br></td>
	    	</tr>
	    	<!-- Baris TTD Surat -->
	    	<tr>
	    		<td></td>
	    		<td colspan="2" align="center"></td>
	    		<td colspan="2" align="right">
	    			<table border="0" style="width: 300px">
	    				<tr>
	    					<td>Bikini Buttom, 09 Mei 2020</td>
	    				</tr>
	    				<tr>
	    					<td>Kepala Desa Bikini Buttom</td>
	    				</tr>
	    				<tr height="60px">
	    					<td></td>
	    				</tr>
	    				<tr>
	    					<td><b>MR. EUGENE CRAB</b></td>
	    				</tr>
	    			</table>
	    		</td>
	    		<td></td>
	    	</tr>
	    </table>
	    <?php } ?>
	</div>
    
</body>
</html>



