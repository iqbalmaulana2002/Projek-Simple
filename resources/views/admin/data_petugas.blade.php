@extends('../tamplate_admin')
@section('title','Data Petugas')
@section('content')
<div class="container">
             <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Data Petugas</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>2021-04</option>
                                    </select>
                                </div>
                                <a href="{{url('/admin/register_petugas')}}" class="btn btn-success font-weight-bold">Register Petugas</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">No Telephone</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($petugas as $ptg)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$ptg->nama}}</td>
                                            <td>{{$ptg->username}}</td>
                                            <td>{{$ptg->telp}}</td>
                                            <td>
                                                <form class="text-center d-inline" action="{{url('/admin/delete_data_petugas/'.$ptg->id_petugas)}}" method="POST" aria-expanded="false">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="hide-menu btn btn-danger"> Hapus</button>
                                                </form>
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