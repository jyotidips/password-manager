@extends('layouts.app') @section('content')

@if(count($posts) > 0)
<h1 class="text-center text-danger">All Saved Items</h1>
<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	.aa {
		text-decoration: none;
	}

	.container {
		padding: 2px 16px;
	}
</style>

@foreach ($posts as $post)

<a href="{{ url('/posts', $post->id) }}" class="card col-xs-6 col-sm-3 col-md-3 text-uppercase" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;padding-top:10px;">
	<img src="img/log.jpg" alt="Avatar" style="width:100%; height:700 px">
	
					
	
	
	
			<b style="height:200px;">
				<span>

					

					<h2>{{ str_limit($post->title, $limit = 5, $end = '...') }}</h2>
					
					
					<small>Created {{ $post->created_at->diffForHumans() }}</small>
					
					<form class="form-control-sm" action="{{ route('posts.destroy',$post->id) }}" method="post">
						{{ method_field('DELETE') }}
                		{!! csrf_field() !!}
						<button class="btn btn-danger">Delete</button>
					</form>
					
				</span>
				
						<a href="http://{{ $post->url }}">Visit</a>
					
			</b>


		{{-- @if($post->description > $post[10]) $post->description= substr($post->description, 0, $post[10]);
		<p>{{ post->description }}</p>
		@else
		<p>{{ $post->description }}</p>
		@endif --}}


	
	
</a>




@endforeach

@if(count($posts) > 10)
 {{ $posts->links() }}
@endif

@else
<h1 class="text-center text-danger">You Have No Saved Items</h1>
@endif

@endsection