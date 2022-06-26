@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1>Edit step</h1>

					<form method="post" action="{{ route('admin.steps.update', $step->id) }}">
						@csrf
						<div class="input-group mb-3">
							<input type="text" name="name" class="form-control" placeholder="Step name" aria-label="Step name" value="{{ $step->name }}">
						</div>
						<div class="input-group mb-3">
							<textarea name="instructions" placeholder="Instructions" class="form-control">{{ $step->instructions }}</textarea>
						</div>
						<div>
							<button class="btn btn-primary px-5 ms-3">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
