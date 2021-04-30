@extends('template/home')

@section('isi_konten')
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
<body>
    <H5 class="text-primary mt-5 ml-2"> Tambah stock opname</H5>
    
    <form class="ml-3 mr-3">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputID">ID opname</label>
            <input type="text" class="form-control" id="inputID" placeholder="Opname ID" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="inputID1">ID Admin</label>
            <input type="text" class="form-control" id="inputID1" placeholder="Admin ID"readonly >
          </div>
          <div class="form-group col-md-4">
            <label for="inputtanggal">Tanggal</label>
            <input type="date" class="form-control" id="inputtanggal" placeholder="tanggal">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputproduk">ID produk</label>
          <input type="text" class="form-control" id="inputproduk" placeholder="ID Produk">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">ID Satuan</label>
          <input type="text" class="form-control" id="inputSatuan" placeholder="ID Satuan">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputjumlahsistem">Jumlah Sistem</label>
            <input type="text" class="form-control" id="inputjumlahsistem" placeholder="Jumlah Sistem">
          </div>
          <div class="form-group col-md-4">
            <label for="inputjumlahhitung">Jumlah Hitung</label>
            <input type="text" class="form-control" id="inputjumlahhitung"placeholder = "Jumlah Hitung">
          </div>
          <div class="form-group col-md-4">
            <label for="inputperbedaan">Perbedaan</label>
            <input type="text" class="form-control" id="inputperbedaan" placeholder="perbedaan"readonly>
          </div>
        </div>
        <div class="form-group">
            <label for="inputalasan">Alasan</label>
            <input type="text" class="form-control" id="inputalasan" placeholder="Alasan">
          </div>

       
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type= "submit" class = "btn btn-secondary">Batal</button>
      </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
@endsection