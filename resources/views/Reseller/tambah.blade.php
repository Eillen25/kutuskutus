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
            <h5 class="mb-2 text-primary">Tambah Reseller Baru</h5>
        </div>
    <div class="ini">
        <div class="col mb-2">
            <label for="fullName"class='font-weight-bold'>ID Reseller</label>
            <input type="text" class="form-control" id="fullName" value="RL006" readonly >
        </div>
        <div class="col mb-4">  
            <label for="phone"class='font-weight-bold'>Nama Reseller</label>
            <input type="text" class="form-control" id="fullName" value=""  >
        </div>
        <div class="col">    
            <label for="eMail"class='font-weight-bold'>Grade ID</label>
            <input type="text" class="form-control" value="" >
         </div>
    </div>
    <div class="row gutters">
        <div class="col">
                <label for="fullName" class='font-weight-bold'>Total Kutus </label>
                <input type="text" class="form-control" id="fullName" value="">
        </div>
        <div class="col">
                <label for="eMail"class='font-weight-bold'>Tanggal Kutus</label>
                <input type="date" class="form-control" value="" >
        </div>
       
    </div>
</div>    
<div class="form-group col-md-8" style="text-align:left;padding-left:0px; margin-top:30px;">
    <label for="inputalamat" class='font-weight-bold'>Alamat</label>
    <textarea class="form-control" rows="3" id="inputalamat" name="alamat" placeholder="Alamat"></textarea>
</div>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-center mt-4">
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