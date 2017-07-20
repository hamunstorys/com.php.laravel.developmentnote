@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Articles
                    <small>게시물 보기</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach($articles as $article)
                <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12 portfolio-item">
                    <h3>
                        <a href="{{route('article.show',[$id=$article->id]) }}">
                            {{$article->subject}}</a>
                    </h3>
                    <a href="{{ route('article.show',[$id=$article->id]) }}" title="{{$article->subject}}">
                        {{ Html::image('storage/articles/thumbnails/'.$article->id.'/'.'thumbnail.jpg',$article->id , array('class' => 'img-fluid')) }}
                    </a>
                </div>
            @endforeach
        </div>
        <hr>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    @for($i = 1; $i <$pagination+1; $i++)
                        <li>
                            <a href="{{route('search.articles.show',[$select, $query, $i])}}">{{$i}}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop