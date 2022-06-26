@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1 class="text-center">Create a new category</h1>

					<form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
						@csrf

						<div class="row mb-3">
							<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="name" class="col-md-4 col-form-label text-md-end">Image</label>

							<div class="col-md-6">
								<input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="name" autofocus>

								@error('image')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary mt-3 px-5">
									Create
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
