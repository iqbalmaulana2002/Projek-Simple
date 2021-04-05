@extends('../tamplate')
@section('title','Dashboard Masyarakat')
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
                                            <th class="border-top-0">Isi Pengaduan</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pengaduan as $msy)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$msy->tgl_pengaduan}}</td>
                                            <td>{{$msy->isi_laporan}}</td>
                                            <td>{{$msy->status}}</td>
                                            <td><a href="{{url('/masyarakat/detail_pengaduan/'.$msy->id_pengaduan)}}" class="btn btn-primary font-weight-bold"><i class="fas fa-search-plus"></i> <span class="d-none d-md-inline">Detail</span></a></td>
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