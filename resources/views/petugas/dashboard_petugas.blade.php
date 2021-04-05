@extends('../tamplate_petugas')
@section('title','Dashboard Petugas')
@section('content')

<div class="container">


    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Data Pengaduan</h3>
                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <select class="form-select shadow-none row border-top">
                            <option>2021-04</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Tanggal Pengaduan</th>
                                <th class="border-top-0">Nama Pengadu</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $msy)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$msy->tgl_pengaduan}}</td>
                                <td>{{$msy->masyarakat->nama}}</td>
                                <td>{{$msy->status}}</td>
                                <td>
                                    <a href="{{url('/petugas/detail_pengaduan/'.$msy->id_pengaduan)}}" class="btn btn-primary font-weight-bold">
                                    <i class="fas fa-search-plus"></i> <span class="d-none d-md-inline">Detail</span></a>
                                    @if($msy->status != 'selesai')
                                        <a href="{{url('/petugas/tanggapan/'.$msy->id_pengaduan)}}" class="btn btn-success font-weight-bold">
                                        <i class="fas fa-check"></i> <span class="d-none d-md-inline">Tanggapi</span></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection