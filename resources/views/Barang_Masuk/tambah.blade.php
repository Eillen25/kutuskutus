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
    <div class="row gutters ml-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="mb-3 text-primary">Tambah Barang Masuk</h3>
        </div>
    <div class="ini ml-2">
        <div class="col mb-3">
            <label for="fullName"class='font-weight-bold'>No. Nota</label>
            <input type="text" class="form-control" id="fullName" value="{{$nota[0]->ID}}" readonly >
        </div>
        <div class="col mb-4">  
            <label for="phone"class='font-weight-bold'>Tanggal</label>
            <input type="text" class="form-control datepicker" id="from-datepicker"  value="{{ now()->format('d/m/Y') }}" >
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
            <div class="col-md-3">
                <label for="eMail"class='font-weight-bold'>Harga Satuan</label>
            </div>
            <div class="col-md-3 ">
                <label for="eMail"class='font-weight-bold'>Subtotal</label>
            </div>
        </div>
    
        <div class="col-md-12 row">
            <div class="col-md-3">
                <select class="form-control mt-2 ab-t-rpt-2" name="produk"
                                        id="type_institution"  required>
                                        <!-- <option value="">--Nama Produk--</option> -->
                                        @foreach($produk as $items)
                                        <option value="{{ $items->produk_id }}" id="id_produk" onchange="myFunction()">{{ $items->nama_produk }}</option>
                                        @endforeach
                </select>
            </div>
            <div class="col-md-2"><input type="text" class="form-control" id="fullName" value=""></div>
            <div class="col-md-3"> <input type="text" class="form-control" value="" readonly></div>
            <div class="col-md-3  mb-3"> <input type="text" class="form-control" value="" readonly></div>
        </div>
    </div>
    <div class="col align-self-end">
        <div class="col-md-3 offset-md-8 ">
            <label for="eMail"class='font-weight-bold'>Total Harga</label>
        </div>
    <div class="col align-self-end  ">
            <div class="col-md-3 offset-md-8"> <input type="text" class="form-control" value="" readonly></div>
    </div>
    </div>
</div>    
    <div class="row gutters">
        <div class="col align-self-end">
            <div class="col-md-3 offset-md-8  mt-5">
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
