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
    <H3 class="text-primary mt-5 ml-2"> Tambah stock opname</H3>
      <div class="col-md-12 row  ml-4">
          <div class="col-md-3"><label for="inputID">ID opname</label></div>
          <div class="col-md-3"><label for="inputID1">ID Admin</label></div>
          <div class="col-md-3"><label for="inputtanggal">Tanggal</label></div>
      <div class="col-md-12 row mb-3">
            <div class="col-md-3"><input type="text" class="form-control" id="inputID" value="SO2101" readonly></div>
            <div class="col-md-3"><select class="form-control" id="sel1">
              <option>owner</option>
              <option>sehun</option>
              <option>iniaku</option>
              <option>apaaja</option>
            </select></div>
            <div class="col-md-3"><input type="date" class="form-control" id="inputtanggal" ></div>
      </div>
      </div>
      <div class="roww">
        <div class="col-md-12 row  ml-4">
          <div class="col-md-3"><label for="inputproduk">Nama produk</label></div>
          <div class="col-md-3"><label for="inputAddress2">Satuan</label></div>
        </div>
        <div class="col-md-12 row  ml-4 mb-3">
          <div class="col-md-3"><select class="form-control" id="sel1">
            <option>Minyak Kutus - Kutus</option>
            <option>Minyak Tanamu Tanami</option>
            <option>Sabun Kalila Kalila</option>
            <option>Sabun Tanamu Tanami</option>
            <option>Bubuk Kutus - Kutus</option>
          </select></div>
          <div class="col-md-3"><input type="text" class="form-control" id="inputSatuan"></div>
        </div>
      </div>
        <div class="roww">
          <div class="col-md-12 row  ml-4">
            <div class="col-md-3"><label for="inputID">Jumlah Sistem</label></div>
            <div class="col-md-3"><label for="inputID1">Jumlah Hitung</label></div>
            <div class="col-md-3"><label for="inputtanggal">Perbedaan</label></div>
          <div class="col-md-12 row mb-3">
              <div class="col-md-3"><input type="text" class="form-control" id="inputID" value="0"></div>
              <div class="col-md-3"><input type="text" class="form-control" id="inputID1" value="0"></div>
              <div class="col-md-3"><input type="text" class="form-control" id="inputtanggal" value="0"></div>
          </div>
          </div>
        </div>
        <div class="roww">
          <div class="col-md-12 row  ml-4">
            <div class="col-md-3"><label for="inputalasan">Alasan</label></div>
          </div>
          <div class="col-md-12 row  ml-4">
            <div class="col-md-5"><input type="text" class="form-control" id="inputalasan"></div>
          </div>
        </div>
        <div class="row gutters">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="text-center mt-5">
                  <button type="button" id="submit" name="submit" class="btn btn-secondary btn-lg">Batal</button>
                  <button type="button" id="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
              </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
@endsection