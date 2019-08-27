@extends('layouts.site')

@section('content')

<script src="https://kit.fontawesome.com/96687dbbfc.js"></script>

<main role="main">
  <div class="container" style="margin-top: 14px;">

  <div class="row">
    
    <!-- Booklist -->
    
    @foreach($articles as $article)
      <div class="col-md-3" style="margin: 50px 0;">

        <h3><span style="font-size: 20px; font-weight: 700;">{{$article->author}}</span><span>, </span><span style="font-size: 16px;">{{$article->name}}</span></h3>
        <p><img src="../img/{{$article->image}}" width="60%" height="200px" style="margin: 0 auto; display: block;"></p>
        <p style="height: 4.4em;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        ">{{$article->desc}}</p>
        <p><b>Pages:</b> {{$article->count}}</p>
      </div>

    @endforeach
      
    </div>

      <div class="col-md-12">
          {{$articles->links()}}
      </div>

  </div>

</main>
@endsection