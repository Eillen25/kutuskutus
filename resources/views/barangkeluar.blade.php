@extends('template/home')

@section('isi_konten')
<!-- SRC DATATABLE -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="main-content">

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">
                  <a class="btn btn-primary float-right" style="background-color:#C2A890" href="/addexit" role="button">+ Buat Nota</a>
                  <a class="btn btn-primary float-right mr-2" style="background-color:#d9b38c" href="/laporan/bln" role="button">Laporan Periodik</a>
                  <a class="btn btn-primary float-right mr-2" style="background-color:#d9b38c" href="/laporan/thn" role="button">Laporan Tahunan</a>



                    <table class="table-wisata table-tiketsaya table " id ="exit-table">
                        <thead>
                            <tr class="1">
                                <th scope="col">Nomor Nota</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Reseller</th>
                                <th scope="col">Status</th>
                                
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <!-- BENTAR YA GENGS TA REMARK SEK -->

                            <!-- <tr class="2" style="background-color: #DAC1AE;">
                                <td>Monas</td>
                                <td>Jakarta, Indonesia</td>
                                <td>January 22, 2019</td>
                                <td>US$ 20</td>
                                <td>
                                    <a href="manage_wisata.html" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr class="3" style="background-color: #DAC1AE">
                                <td>Candi</td>
                                <td>Magelang, Indonesia</td>
                                <td>March 1, 2019</td>
                                <td>US$ 220</td>
                                <td>
                                    <a href="manage_wisata.html" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr class="4" style="background-color: #DAC1AE">
                                <td>Pisa</td>
                                <td>Plance, Italy</td>
                                <td>August 16, 2019</td>
                                <td>US$ 120</td>
                                <td>
                                    <a href="manage_wisata.html" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr> -->


                        </tbody>
                    </table>


                </div>



            </div>



        </div>
</div>
<script>
  $(document).ready(function() {
    $('#exit-table').DataTable({
      processing: true,
      serverside: true,
      ajax: 'barangkeluar/exit_json',
      order: [[3, 'asc']],
      columns: [{
          data: 'nota_id',
          name: 'nota_id'
        },
        {
          data: 'tanggal',
          name: 'tanggal'
        },
        {
          data: 'nama_reseller',
          name: 'nama_reseller'
        },
        {
          data: 'status',
          name: 'status'
        },
        {
          data: 'action',
          name: 'action'
        }
      ]
    });
  });
</script>
  
@endsection