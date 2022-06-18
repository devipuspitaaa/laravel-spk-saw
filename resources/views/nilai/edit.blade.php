@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Tambah Alternatif</h2>
                        </form>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <form action="{{route('nilai.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                                @csrf
                                @foreach($master_kriteria as $kriteria)
                                    <div class="form-group">
                                        <label for="{{$kriteria->kode}}">{{$kriteria->nama}}</label>
                                        <select name="{{$kriteria->kode}}" class="form-control">
                                            <option value="">-- Pilih {{$kriteria->nama}}--</option>
                                            @foreach($kriteria->crip as $crip)
                                                <option value="{{$crip->id}}" {{(in_array($crip->id,$selected_crip))?'selected':''}}>{{$crip->nama_crip}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection