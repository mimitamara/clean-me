@extends('layouts.app')

@section('content')
	<section class="subscriptions">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="row justify-content-center" style="background: #fff;padding: 1rem;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);border-radius: 23px;">
						<h1 style="margin-top: -40px;margin-left: -50px;">Your Subscription</h1>
						@foreach($subscriptions as $subscription)
							<div class="col-md-4">
								<p><b>{{ $subscription->name }}</b> <span class="text-primary">{{ $subscription->getPrice() }}</span></p>
								<p class="fs-5">{{ $subscription->description }}</p>

								<div class="text-center">
									@if(auth()->user())
										<a class="btn btn-primary px-5" href="{{ route('stripe', $subscription->id) }}">Buy</a>
									@else
										<a class="btn btn-primary px-5" href="{{ route('login') }}">Buy</a>
									@endif
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
