@extends('layouts.app')

@section('content')
	<section class="about-us">
		<div class="container my-5">
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<div class="info-block px-5 pb-5 my-5">
						<h1>About us</h1>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
						</p>

						<div class="row">
							<div class="col-md-8">
								<p class="quote py-5">
									“We are here to guide you to
									your <span class="text-primary">independency</span>.” - Nora
								</p>
							</div>
						</div>

						<img class="girls" src="{{ asset('images/about-us/girls.png') }}" alt="">
					</div>
				</div>
			</div>

		</div>
	</section>
@endsection
