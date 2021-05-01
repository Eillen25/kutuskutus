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
    <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h5 class="mb-3 text-primary">Tambah Barang Keluar</h5>
        </div>
        <div class="row  ml-2">
            <div class="col">
                <label for="fullName"class='font-weight-bold'>Nama Reseller</label>
                <input type="text" class="form-control" id="fullName" value="" >
            </div>
        </div>
    <div class="row gutters ml-2">
        <div class="col">
            <label for="fullName"class='font-weight-bold'>No. Nota</label>
            <input type="text" class="form-control" id="fullName" value="" readonly>
        </div>
        <div class="col">
            <label for="fullName"class='font-weight-bold'>Admin ID</label>
            <input type="text" class="form-control" id="fullName" value="" readonly>
        </div>
        <div class="col mb-4">  
            <label for="phone"class='font-weight-bold'>Tanggal</label>
            <input type="text" class="form-control datepicker" id="from-datepicker" value="{{ now()->format('d/m/Y') }}">
        </div>
    </div>
    
    <div class="row ml-2">
        <div class="col-md-12 row">
            <div class="col-md-3">
                <label for="fullName" class='font-weight-bold'>Nama Produk</label>
            </div>
            <div class="col-md-2">
                <label for="fullName" class='font-weight-bold'>Jumlah Per Produk </label>
            </div>
            <div class="col-md-2">
                <label for="eMail"class='font-weight-bold'>Harga Satuan</label>
            </div>
            <div class="col-md-2">
                <label for="eMail"class='font-weight-bold'>Harga Setelah Diskon</label>
            </div>
            <div class="col-md-3">
                <label for="eMail"class='font-weight-bold'>Subtotal</label>
            </div>
        </div>
        <div class="col-md-12 row">
            <div class="col-md-3"><input type="text" class="form-control" id="fullName" value="" ></div>
            <div class="col-md-2"><input type="text" class="form-control" id="fullName" value=""></div>
            <div class="col-md-2"> <input type="text" class="form-control" value="" readonly></div>
            <div class="col-md-2"> <input type="text" class="form-control" value="" readonly></div>
            <div class="col-md-3"><input type="text" class="form-control" value="" readonly></div>
        </div>
    </div>
</div>    
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-center"style="margin-top:80px;">
                <button type="button" id="submit" name="submit" class="btn btn-secondary btn-lg">Batal</button>
                <button type="button" id="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
            </div>
        </div>
    </div>
</div>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
@endsection
