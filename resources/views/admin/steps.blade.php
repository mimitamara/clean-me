@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1>Steps</h1>

					@foreach($categories as $category)
						<div class="mb-5">
							<h2>{{ $category->name }}</h2>
							<h5>Steps</h5>
							<div class="row border-bottom">
								<div class="col">
									<p class="fs-4 mb-0 fw-bold">Order Name</p>
								</div>
								<div class="col">
									<p class="fs-4 mb-0 fw-bold">Created at</p>
								</div>

								<div class="col">
									<p class="fs-4 mb-0 fw-bold">Actions</p>
								</div>
							</div>

							@foreach($category->steps as $step)
								<div class="row border-bottom py-2">
									<div class="col">
										<p class="fs-4 mb-0">#{{ $step->order }} {{ $step->name }}</p>
									</div>

									<div class="col">
										<p class="fs-4 mb-0">{{ $step->created_at }}</p>
									</div>

									<div class="col">
										<div class="row">
											<div class="col">
												<a class="btn btn-primary w-100" href="{{ route('admin.steps.edit', $step->id) }}">
													Edit
												</a>
											</div>
											<div class="col">
												<form method="post" action="{{ route('admin.steps.delete', $step->id) }}">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger w-100">Delete</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							<div class="mt-3">
								<form method="post" action="{{ route('admin.steps.store') }}">
									@csrf
									<input type="hidden" name="category_id" value="{{ $category->id }}">
									<div class="input-group mb-3">
										<input type="text" name="name" class="form-control" placeholder="Step name" aria-label="Step name">
									</div>
									<div class="input-group mb-3">
										<textarea name="instructions" placeholder="Instructions" class="form-control"></textarea>
									</div>
									<div>
										<button class="btn btn-primary px-5 ms-3">Add</button>
									</div>
								</form>

								@error('name')
								<span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
								@enderror
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
