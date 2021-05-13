
<form action='/laporan/thn/cetak' method="POST">
@csrf
    <select class="form-control mt-2 ab-t-rpt-2" name="year">
        @foreach($tahun as $t) 
            <option value="{{$t->year}}">{{$t->year}}</option>
        @endforeach
    </select>
<button type="submit">Submit</button>
</form>