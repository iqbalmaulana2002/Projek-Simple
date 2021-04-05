@extends('../tamplate_petugas')
@section('title','Data Masyarakat')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Data Masyarakat</h3>
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
                                <th class="border-top-0">Nik</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">No Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($masyarakat as $msy)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$msy->nik}}</td>
                                <td>{{$msy->nama}}</td>
                                <td>{{$msy->username}}</td>
                                <td>{{$msy->telp}}</td>
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