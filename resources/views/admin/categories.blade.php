@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1>Categories</h1>

					<a class="btn btn-primary mb-4" href="{{ route('admin.categories.create') }}">
						Create new category
					</a>

					<div class="row border-bottom">
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Name</p>
						</div>
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Created at</p>
						</div>

						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Actions</p>
						</div>
					</div>
					@foreach($categories as $category)
						<div class="row border-bottom py-2">
							<div class="col">
								<p class="fs-4 mb-0">{{ $category->name }}</p>
							</div>

							<div class="col">
								<p class="fs-4 mb-0">{{ $category->created_at }}</p>
							</div>

							<div class="col">
								<div class="row">
									<div class="col">
										<a class="btn btn-primary w-100" href="{{ route('admin.categories.update', $category->id) }}">
											Edit
										</a>
									</div>
									<div class="col">
										<form method="post" action="{{ route('admin.categories.delete', $category->id) }}">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger w-100">Delete</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
