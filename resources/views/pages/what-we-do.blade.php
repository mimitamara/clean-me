@extends('layouts.app')

@section('content')
	<section class="what-we-do">
		<div class="container my-5">
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<div class="info-block px-5 pb-5 my-5">
						<h1>What we do</h1>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
						</p>
						<div class="row">
							<div class="col-xl-8">
								<p>
									Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
									sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
									aliquyam erat, sed diam voluptua.
									Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
									sed diam nonumy eirmod tempor invidunt ut labore et dolore
									magna aliquyam erat, sed diam voluptua.
								</p>
							</div>
							<div class="col-xl-4">
								<img class="todo-list" src="{{ asset('images/what-we-do/todo-list.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5 pt-5">
				<h3 class="text-center mb-5">Have more questions? Contact us.</h3>
				<div class="col-md-4">
					<div class="contact-block mb-4">
						<img class="img-fluid" src="{{ asset('images/icons/phone.png') }}" alt="">
						<a href="tel:01 37438 39748">01 37438 39748</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-block mb-4">
						<img class="img-fluid" src="{{ asset('images/icons/email.png') }}" alt="">
						<a href="mailto:cs@cleanme.com">cs@cleanme.com</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-block mb-4">
						<img class="img-fluid" src="{{ asset('images/icons/whatsup.png') }}" alt="">
						<a href="tel:01 37438 39748">01 37438 39748</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
