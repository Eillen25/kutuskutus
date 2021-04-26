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
.text-center {
    margin-top: 20px;
}
</style>
<div class="card-body" style="margin-top: 40px">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h5 class="mb-2 text-primary">Ubah Barang Masuk</h5>
        </div>
    <div class="ini">
        <div class="col">
            <label for="fullName"class='font-weight-bold'>No. Nota</label>
            <input type="text" class="form-control" id="fullName" value="B01234" readonly>
        </div>
        <div class="col mb-4">  
            <label for="phone"class='font-weight-bold'>Tanggal</label>
            <input type="date" class="form-control" id="from-datepicker" >
        </div>
        <div class="col">
            <label for="fullName" class='font-weight-bold'>Nama Produk</label>
            <input type="text" class="form-control" id="fullName" value="Minyak Kutus - Kutus" readonly>
            <input type="text" class="form-control" id="fullName" value="Minyak Tanamu Tanami" readonly>
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col">
                <label for="fullName" class='font-weight-bold'>Jumlah Per Produk </label>
                <input type="text" class="form-control" id="fullName" value="1000">
                <input type="text" class="form-control" id="fullName" value="10">
        </div>
        <div class="col">
                <label for="eMail"class='font-weight-bold'>Harga Satuan</label>
                <input type="text" class="form-control" value="230000" readonly>
                <input type="text" class="form-control" value="325000" readonly>
        </div>
        <div class="col">    
                <label for="eMail"class='font-weight-bold'>Harga Harga Total</label>
                <input type="text" class="form-control" value="230000000" >
                <input type="text" class="form-control" value="3250000" >
        </div>
    </div>
</div>    
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-center mt-4">
                <button type="button" id="submit" name="submit" class="btn btn-secondary btn-lg">Batal</button>
                <button type="button" id="submit" name="submit" class="btn btn-primary btn-lg">Ubah</button>
            </div>
        </div>
    </div>
</div>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
@endsection
