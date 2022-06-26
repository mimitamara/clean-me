@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 my-lg-5">
				<div class="text-center my-md-5 py-md-5">
					<h1 class="text-center text-primary">Create a Task</h1>
					<p>Let’s help you clean and finish your tasks</p>
					<form method="POST" action="{{ route('tasks.store') }}">
						@csrf

						<div class="row mb-3">
							<label for="category" class="col-md-4 col-form-label text-md-end">Task</label>

							<div class="col-md-6">
								<select id="name" type="text" class="form-select @error('category') is-invalid @enderror" name="category">
									@foreach($categories as $category)
									<option value="{{ $category->id }}">
										{{ $category->name }}
									</option>
									@endforeach
								</select>

								@error('category_id')
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
	</div>
@endsection
