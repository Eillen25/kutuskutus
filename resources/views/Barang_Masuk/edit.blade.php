@extends('template/home')

@section('isi_konten')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<form>
	<div class="row-1">
		<div class="col-sm">
			<label for="nama">Nama Produk</label>
		  <input type="text" class="form-control" id="nama" style="background-color: #DAC1AE">
		</div>
		<div class="col-sm">
			<label for="harga">Harga Satuan</label>
		  <input type="text" class="form-control" id="harga" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="row-2">
		<div class="col-sm">
			<label for="jum">Jumlah</label>
		  <input type="text" class="form-control "style="background-color: #DAC1AE" id="jum">
		</div>
		<div class="col-sm">
			<label for="har">Harga Total</label>
		  <input type="text" class="form-control" id="har" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="row-2">
		<div class="col-sm">
			<label for="tanggal">Tanggal</label>
		  <input type="text" class="form-control" id="tanggal" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="but " style="margin-left: 265px;margin-top: 20px;">
		<button type="submit" class="btn  btn-primary mb-2 ">Ubah</button>
	</div>
</form>
</div>
@endsection