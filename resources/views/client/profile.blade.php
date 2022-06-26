@extends('layouts.app')

@section('content')
	<section class="categories">
		<div class="container my-5 py-md-5" style="min-height: 500px">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h1 class="text-center">Subscription</h1>
					@if($client->subscription)
						<p class="text-center"><b>Subscription plan:</b> {{ $client->subscription->subscription->name }} | <b>Active till:</b> {{ $client->subscription->active_till }}</p>
					@else
						<div class="text-center mb-3">
							<a class="btn btn-primary" href="{{ route('pages.subscriptions') }}">Buy Subscription</a>
						</div>
					@endif
					<h1 class="text-center">Profile</h1>

					<form method="POST" action="{{ route('client.profile') }}">
						@csrf

						<div class="row mb-3">
							<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $client->name) }}" autocomplete="name" autofocus>

								@error('name')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $client->email) }}" autocomplete="email">

								@error('email')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary mt-3 px-5">
									Update
								</button>
							</div>
						</div>
					</form>

					<h1 class="text-center mt-4">Password</h1>

					<form method="POST" action="{{ route('client.profile') }}">
						@csrf

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">Current password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="new-password">

								@error('current_password')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">New Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm New Password</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary mt-3 px-5">
									Update
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
