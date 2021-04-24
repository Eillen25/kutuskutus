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
            <h5 class="mb-2 text-primary">Ubah Data Reseller</h5>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group mt-4">
                <label for="fullName">Reseller ID</label>
                {{-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Oh Sehun"> --}}
                <input type="text" class="form-control" id="fullName" value="RL001" readonly >
            </div>
            <div class="form-group">
                <label for="fullName">Nama Reseller</label>
                <input type="text" class="form-control" id="fullName" value="Megmeg">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group mt-4">
                <label for="eMail">Alamat</label>
                <input type="text" class="form-control" value="Jl. Damai Sejahtera Tapi Boong" >
            </div>
            <div class="form-group">
                <label for="eMail">Jenis Grade</label>
                <input type="text" class="form-control" value="Bronze" >
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-center">
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