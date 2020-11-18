@extends('template.app')

@section('page-indicator')
    <div class="container d-flex flex-row" style="margin: 2em auto">
        <a href="javascript:history.back()" class="btn text-light" style="background-color: rgba(245, 246, 248, 0.18)">KEMBALI</a>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary text-light">LIHAT SEMUA FILM</a>
    </div>
@endsection

@section('page-content')
    @foreach ($movieDetails as $detail)
        <div class="container h-100 d-flex flex-column" style="background-color: rgba(245, 246, 248, 0.06); padding: 2em;">
            <div class="row justify-content-around">
                <div class="col-3">
                    <img src="{{ asset('images/'.$detail->photo) }}" alt="img-thumbnail" class="w-100">
                </div>
                <div class="col-4 d-flex flex-column">
                    <h1 class="text-light">{{ $detail->title }}</h1>
                    <div class="d-flex flex-row">
                        @for ($i = 0; $i < $detail->rating; $i++)
                            <img src="{{ asset('images/rating-star.png') }}" alt="rating" style="width: 1.5em">
                        @endfor
                    </div>
                    <div style="height: 1em"></div>
                    <p class="text-light text-justify">{{ $detail->description }}</p>
                    <p class="text-light">Kategori: <a href="{{ route('genre', ['genre' => $detail->genre_id]) }}">{{ $detail->name }}</a></p>
                </div>
                <div class="col-5">
                    <h3 class="text-light">Episodes</h3>
                    <table class="w-100" style="border: 1px solid #DEDEDE">
                        <thead style="background-color: rgba(245, 246, 248, 0.12); line-height: 2.5em;">
                            <tr>
                                <td class="w-25 text-center text-light">Episode</td>
                                <td class="w-75 text-center text-light">Judul</td>
                            </tr>
                        </thead>
                        <tbody style="background-color: rgba(245, 246, 248, 0.18); line-height: 2.5em;">
                            @foreach ($episodes as $eps)
                                <tr>
                                    <td class="text-center text-light">{{ $eps->episode }}</td>
                                    <td class="text-light">{{ $eps->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="height: 1em"></div>
                    {{ $episodes->links() }}
                </div>
            </div>
        </div>
    @endforeach
@endsection
