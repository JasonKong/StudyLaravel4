@extends('admin._layouts.default')
 
@section('main')
 
    <h2>页面内容</h2>

        <div id="onepage">
            
            <div class="title">
                <h3>{{ $page->title }}</h3>
            </div>

            <div class="info">
            	Published by {{ $author }} at {{ $page->created_at }} last update at {{ $page->updated_at }}
            </div>

            <div class="body">
                {{ $page->body }}
            </div>

        </div>
 
@stop