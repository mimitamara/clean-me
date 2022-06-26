@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<div class="info-block px-5 pb-5 my-5">
						<h1>Categories</h1>

						<div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
						<div class="p-3 d-none d-lg-block">
							<img src="{{ asset('images/left.png') }}" alt="">
						</div>
						@foreach($categories as $category)
							<form method="POST" action="{{ route('tasks.store') }}">
								@csrf
								<div class="p-3 text-center">
									<img src="{{ $category->getImage() }}" alt=""/>
									<input id="name" type="hidden"  name="category" value="{{ $category->id }}">
									<input id="comment" type="hidden"  name="comment" value="none">
									<button type="submit" class="text-center mt-3 btn px-5" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);border-radius: 18px;background-color: #f6f6f6;">
										{{ $category->name }}
									</button>
								</div>
							</form>
						@endforeach
							<div class="p-3 d-none d-lg-block">
							<img src="{{ asset('images/right.png') }}" alt="">
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
