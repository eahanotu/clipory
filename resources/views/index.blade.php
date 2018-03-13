@extends('layouts.default')

@section('content')
    <h1>Uploads</h1>

    @if (count($videos)>1))
        <ul class="list-group">
        @foreach ($videos as $video)
            <li class="list-group-item">{{$video}}</li>
        @endforeach
        </ul>
    @endif
    
    <form method="POST" name="add" class="form" action="">
        <div class="form-group">
            <input type="file" name="vid" accept=".mp4" class="btn">
        </div>
        <div class="form-group">
            <input type="button" name="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>
    
@endsection