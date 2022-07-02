@extends('layouts.app')

@section('content')
	<section class="about-us">
		<div class="container my-5">
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<div class="info-block px-5 pb-5 my-5">
						<h1>About us</h1>
						<p>
							Clean Me ist eine Web-based Applikation, die Menschen helfen soll, in welcher Situation auch immer sie sich befinden, eine einfache und angenehme Putzatmosphäre zu schaffen. Step by step wird erklärt wie man jede Stelle in der Wohnung oder im Haus geputzt wird.
						</p>
						<p>
							Wir sind selbst in diese Situation gestürzt als wir unerwartet unser Elternhaus verlassen mussten, ohne überhaupt zu wissen wie wir unsere Wäsche waschen. So sind wir auf die Idee gekommen CleanMe zu gründen. Statt unnötig Zeit auf Google zu verplempern haben wir eine Applikation kreirt wo man auf einer Platform eine x beliebige Kategorie wählt und jeden Schritt erklärt bekommt.
						</p>

						<div class="row">
							<div class="col-md-8">
								<p class="quote py-5">
									“We are here to guide you to
									your <span class="text-primary">independency</span>.” - Nora
								</p>
{{--								<p class="quote py-5">--}}
{{--									“We are here to guide you to--}}
{{--									your <span class="text-primary">independency</span>.” - Nora--}}
{{--								</p>--}}
							</div>
						</div>

						<img class="girls" src="{{ asset('images/about-us/girls.png') }}" alt="">
					</div>
				</div>
			</div>

		</div>
	</section>
@endsection
