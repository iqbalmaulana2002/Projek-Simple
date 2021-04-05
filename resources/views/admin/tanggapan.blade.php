@extends('../tamplate_admin')
@section('title','Tanggapan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <br><br><h3 class="mb-4"><i class="fas fa-clipboard-list"></i>Berikan Tanggapan Admin</h3>
            <form method="post" action="{{url('/admin/tanggapan/'.$pengaduan->id_pengaduan)}}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" placeholder="Masukkan tanggapan Anda"></textarea>
                    @error('tanggapan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                <label for="status"></label>
                    <select name="status" class="form-control @error('tanggapan') is-invalid @enderror">
                        @if($pengaduan->status == '0')
                            <option value="proses">Proses</option>
                        @endif
                        <option value="selesai">Selesai</option>
                        @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </select>
                </div>
                <div class="form-group row float-right">
                    <div class="col-md mt-4 mb-5">
                        <a href="{{url('/admin/detail_pengaduan/'.$pengaduan->id_pengaduan)}}" class="btn btn-outline-primary btn-light">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tanggapi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection