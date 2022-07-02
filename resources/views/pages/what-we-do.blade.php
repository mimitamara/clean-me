@extends('layouts.app')

@section('content')
	<section class="what-we-do">
		<div class="container my-5">
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<div class="info-block px-5 pb-5 my-5">
						<h1>What we do</h1>
						<p>
							Clean Me ist eine Applikation um Menschen ein einfaches Putzen zu übermitteln.
							Heutzutage kann man sich oft in einer Situation befinden, wo man vor einer Schmutzigen Ecke in der Wohnung oder im Haus befindet und keine Ahnung hat wie man die Putz-Prozedur zu beginnen hat. Die globale Pandemie war eines der größten Motivation, solch eine Applikation zu entwickeln.
						</p>
						<div class="row">
							<div class="col-xl-8">
								<p>
									Personen, welche sonst Putzkraft zu Hause hatten, fanden sich plötzlich ohne jeglicher Hilfe vor dem Putzvorgang, ohne zu wissen wie zu handeln gehört. Dies ist nur eine vieler Situation die einem im Leben begegnen.
								</p>
								<p>
									Die Applikation CleanME ist genau für solches da um unnötiges Googlen und Zeit zu sparen.
									Die Webbasierte App leitet den Nutzer step-by-step durch die Anweisungen, die zum Putzen gebraucht werden. Somit muss man sich nicht mehr Sorgen machen, was als nächster Schritt zu beachten werden muss.
									Diese Schritte werden auch gespeichert, sobald man aus der Kategorie raus muss um andere Kategorien zu beginnen. Eine Lebenserleichternde Applikation.
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
