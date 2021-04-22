@extends('template/home')

@section('isi_konten')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="main-content">
<style>
    body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
</style>
<form>
	<div class="row">
		<div class="col-sm">
			<label for="notaa">No. Nota</label>
		  <input type="text" class="form-control" id="notaa" style="background-color: #DAC1AE">
		</div>
		<div class="col-sm">
			<label for="idadmin">Admin ID</label>
		  <input type="text" class="form-control" id="idadmin" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<label for="reseller">Reseller ID</label>
		  <input type="text" class="form-control "style="background-color: #DAC1AE" id="reseller">
		</div>
		<div class="col-sm">
			<label for="jumlahh">Jumlah</label>
		  <input type="text" class="form-control" id="jumlahh" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<label for="tot">Harga Total</label>
		  <input type="text" class="form-control "style="background-color: #DAC1AE" id="tot">
		</div>
		<div class="col-sm">
			<label for="tanggal">Tanggal</label>
		  <input type="text" class="form-control" id="tanggal" style="background-color: #DAC1AE">
		</div>
	</div>
	<div class="but " style="margin-left: 265px;margin-top: 20px;">
		<button type="submit" class="btn  btn-primary mb-2 ">Ubah</button>
	</div>
</form>

		<!--End Of Footer-->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
@endsection
