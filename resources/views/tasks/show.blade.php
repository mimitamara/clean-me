@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="pb-5" style="border-radius: 68px;background-color: #e2e6ef;">
						<h1 class="mb-3">Your task progress: <span class="text-primary">{{ $task->category->name }}</span></h1>

						@if($currentTask?->step)
							<div class="px-5 mb-5">
								<p class="mb-0"><span style="font-size: 45px;color: #6c63ff;">{{ $currentTask->step->order + 1 }}.</span> {{ $currentTask->step->name }}</p>
								<p style="font-size: 17px;">{{ $currentTask->step->instructions }}</p>
							</div>
						@endif
						<div class="d-flex justify-content-around">
							<div class="d-flex justify-content-center align-items-center" style="width: 325px; height: 325px; border-radius: 100%; background: #fff; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);">
								<div class="circle-wrap">
									<div class="circle">
										<div class="mask full" style="transform: rotate({{ 180 * ($progress / 100) }}deg);">
											<div class="fill" style="transform: rotate({{ 180 * ($progress / 100) }}deg);"></div>
										</div>
										<div class="mask half">
											<div class="fill" style="transform: rotate({{ 180 * ($progress / 100) }}deg);"></div>
										</div>
										<div class="inside-circle">
											<div>
												<p style="color: #c3c3c3;">{{ $currentTask?->getName() }}</p>
												<p style="font-size: 45px">{{ $progress }}%</p>
												<p style="color: #c3c3c3;">Completed</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div>
								<div class="card mb-5" style="width: 18rem;">
									<div class="card-header">
										Tasks
									</div>
									<ul class="list-group list-group-flush">
										@foreach($task->steps as $step)
											<li class="list-group-item">
												<div class="d-flex align-items-center">
													<div class="d-flex align-items-center justify-content-center me-1" style="width: 35px;">
														@if($step->status === 'done')
															<img src="{{ asset('images/arrow.png') }}" alt="">
														@else
															<img src="{{ asset('images/arrow-box.png') }}" alt="">
														@endif
													</div>
													<div>
														{{--														{{ $step->getOrder() }}. {{ $step->getName() }}--}}
														{{ $step->getName() }}
													</div>
													<form method="post" action="{{ route('tasks.finish-step', $step->id) }}">
														@csrf
														@if($step->status === 'done')
															{{--															<button disabled class="btn {{ $step->getStatusBadge() }}" style="width: 100px; display: inline-block;">--}}
															{{--																Done--}}
															{{--															</button>--}}
															{{--															<img src="{{ asset('images/arrow.png') }}" alt="">--}}
														@else
															{{--															<button {{ $disableFinishStep ?? '' }} {{ $step->status === 'done' ? 'disabled' : ''  }} class="btn {{ isset($disableFinishStep) ? 'btn-warning' : 'btn-primary' }} btn-warning" style="width: 100px; display: inline-block;">--}}
															{{--																{{ isset($disableFinishStep) ? 'Waiting' : 'Finish' }}--}}
															{{--															</button>--}}
														@endif
													</form>
												</div>
											</li>
											@php
												if ($step->status === 'waiting') {
													$disableFinishStep = 'disabled';
												}
											@endphp
										@endforeach
									</ul>
								</div>

								@if($currentTask?->id)
								<div class="text-center">
									<form method="post" action="{{ route('tasks.finish-step', $currentTask?->id) }}">
										@csrf
										<button class="btn btn-primary px-5">
											Next Task
										</button>
									</form>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
