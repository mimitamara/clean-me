@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1>Your task history</h1>

					<div class="row border-bottom">
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Task</p>
						</div>

						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Comment</p>
						</div>
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Status</p>
						</div>
						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Created at</p>
						</div>

						<div class="col">
							<p class="fs-4 mb-0 fw-bold">Action</p>
						</div>

					</div>
					@foreach($tasks as $task)
						<div class="row border-bottom py-2">
							<div class="col">
								<p class="fs-4 mb-0">{{ $task->category->name }}</p>
							</div>

							<div class="col">
								<p class="fs-6 mb-0">{{ $task->user_comment }}</p>
							</div>

							<div class="col">
								<p class="fs-4 mb-0">{{ $task->status }}</p>
							</div>

							<div class="col">
								<p class="fs-6 mb-0">{{ $task->created_at }}</p>
							</div>

							<div class="col">
								<a class="btn btn-primary" href="{{ route('tasks.show', $task->id) }}">View Progress</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
