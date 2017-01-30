
@extends('news-portal.commonlayouts.masterlayout')
@section('substitute_content')

    <div class="col-md-8">
        @if(count($items))
           <h3>Search Results for <u>{{$query}}</u></h3>
    @foreach($items as $item)
                <div class="post-wrapper">
            <h1 class="text text-uppercase"><b><a href="{{route('fetchSingle',$item->id)}}">{{ $item->news_title }}</a></b></h1>
                <hr>
        @endforeach
            @else
                <h3>No results found for {{$query}}</h3>
            @endif
    </div>
    </div>




    @stop

    
