@extends('layouts.site')

@section('content')

<script src="https://kit.fontawesome.com/96687dbbfc.js"></script>

<main role="main">

  <div class="container" style="margin-top:-120px; margin-bottom: 20px;">

  <div class="row">
    
    <!-- Booklist -->
    <div class="col-md-12">
    <table style=" border: 1px solid black;">
    <th>Author</th>
    <th>Book name</th>
    <th>Description</th>
    <th>Count of pages</th>
    
    @foreach($articles as $article)
       
        <tr>
          <td>
            <span>{{$article->author}}</span>
          </td>
          <td>
            <span>{{$article->name}}</span>
          </td>
          <td>
            <span>{{$article->desc}}</span>
          </td>
          <td>
            <span>{{$article->count}}</span>
          </td>
        </tr>
      </br>

    @endforeach

    </table>
    
    </div>    
  </div>
  </div>
</main>

@endsection