@extends('layout.main')
@section('layout.content')
    <div class="tm-welcome-container text-center text-white">
        <div class="tm-welcome-container-inner">
            <table border="10" bordercolor="black" align="center" length="1000px" width="1000px">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Judul Video</th>
                </tr>
                <tbody>
                    @foreach ($call as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->nama }}</td>
                            <td>{{ $c->judul_video }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </a>
        </div>
    </div>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
            <source src="video/wheat-field.mp4" type="video/mp4">
        </video>
    </div>

    <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
@endsection
