@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1 class="mb-5">Task: {{ $task->category->name }}</h1>

					<div class="row border-bottom">
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Step</p>
						</div>

						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Status</p>
						</div>

						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Actions</p>
						</div>
					</div>
					@foreach($task->steps as $step)
						<div class="row border-bottom py-2">
							<div class="col">
								<p class="fs-4 mb-0">{{ $step->getName() }}</p>
							</div>

							<div class="col">
								<p class="fs-4 mb-0">{{ $step->status }}</p>
							</div>

							<div class="col">
								<button class="btn btn-primary">
									Finish Step
								</button>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
