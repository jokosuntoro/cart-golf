<!DOCTYPE html>
<html>
<head>
	<title>:: Sistem Prediksi Bermain Golf ::</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-success text-center">
			Sistem Cerdas untuk Prediksi Bermain Golf
		</h1>
		<form class="form-horizontal" method="POST" action="control-golf.php">
			<fieldset>
			<legend></legend>

			<div class="form-row">
			<div class="form-group col-md-6">
				<label class="col-form-label">Cuaca</label>
					<div>
					<select name="cuaca" class="form-control">
						<option value="++">--Pilih Kondisi Cuaca--</option>
						<option value="cerah">Cerah</option>
						<option value="berawan">Berawan</option>
						<option value="hujan">Hujan</option>
					</select>
				</div>
			</div>

			<div class="form-group col-md-6">
				<label class="col-form-label">Temperatur</label>
					<div>
					<select name="temperatur" class="form-control">
						<option value="++">--Pilih Temperatur--</option>
						<option value="dingin">Dingin</option>
						<option value="sejuk">Sejuk</option>
						<option value="panas">Panas</option>
					</select>
				</div>
			</div>
			</div>

			
			<div class="form-group">
				<label class="col-form-label">Kelembaban</label>
					<div>
					<select name="lembab" class="form-control">
						<option value="++">--Pilih Kelembaban--</option>
						<option value="normal">Normal</option>
						<option value="tinggi">Tinggi</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-form-label">Angin</label>
					<div>
					<select name="angin" class="form-control">
						<option value="++">Apakah ada angin?</option>
						<option value="ya">Ya</option>
						<option value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			

			<div class="form-group">
					<button type="submit" class="btn btn-success btn-md">Proses</button>
					<button type="reset" class="btn btn-danger btn-md">Reset</button>
			</div>
			</fieldset>
		</form>
	</div>
</body>
</html>

