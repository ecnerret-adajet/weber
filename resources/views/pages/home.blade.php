@extends('layouts.app')
@section('content')
         <div class="content">


			<ul class="nav justify-content-center mb-3">
				<li class="nav-item border border-primary border-top-0 border-right-0 border-left-0">
					<a class="nav-link active text-dark" href="#">ALL</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">2018</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">2017</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">2016</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">2015</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">2014</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">HANDS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="#">PORTRAIT</a>
				</li>
			</ul>

			<div class="grid">
				{{--  <div class="grid__item" data-size="1280x961">
					<a href="{{ url('/img/original/4.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/4.jpg') }}" alt="img04" />
						<div class="deurlscription description--grid">Propinquity</div>
					</a>
				</div>  --}}
				<div class="grid__item" data-size="1280x1131">
					<a href="{{ url('/img/original/5.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/5.jpg') }}" alt="img05" />
						<div class="description description--grid">Ephemeral</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="{{ url('/img/original/6.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/6.jpg') }}" alt="img06" />
						<div class="description description--grid">Surreptitious</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="{{ url('/img/original/7.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/7.jpg') }}" alt="img07" />
						<div class="description description--grid">Scintilla</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="{{ url('/img/original/8.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/8.jpg') }}" alt="img08" />
						<div class="description description--grid">Vestigial</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="{{ url('/img/original/9.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/9.jpg') }}" alt="img09" />
						<div class="description description--grid">Zephyr</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="{{ url('/img/original/10.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/10.jpg') }}" alt="img10" />
						<div class="description description--grid">Desideratum</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="{{ url('/img/original/11.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/11.jpg') }}" alt="img11" />
						<div class="description description--grid">Quixotic</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="{{ url('/img/original/1.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/1.jpg') }}" alt="img01" />
						<div class="description description--grid">Assemblage</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="{{ url('/img/original/2.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/2.jpg') }}" alt="img02" />
						<div class="description description--grid">Demesne</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="{{ url('/img/original/3.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/3.jpg') }}" alt="img03" />
						<div class="description description--grid">Felicity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="{{ url('/img/original/4.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/4.jpg') }}" alt="img04" />
						<div class="description description--grid">Propinquity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="{{ url('/img/original/5.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/5.jpg') }}" alt="img05" />
						<div class="description description--grid">Ephemeral</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="{{ url('/img/original/6.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/6.jpg') }}" alt="img06" />
						<div class="description description--grid">Surreptitious</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="{{ url('/img/original/7.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/7.jpg') }}" alt="img07" />
						<div class="description description--grid">Scintilla</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="{{ url('/img/original/8.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/8.jpg') }}" alt="img08" />
						<div class="description description--grid">Vestigial</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="{{ url('/img/original/9.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/9.jpg') }}" alt="img09" />
						<div class="description description--grid">Zephyr</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="{{ url('/img/original/10.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/10.jpg') }}" alt="img10" />
						<div class="description description--grid">Desideratum</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="{{ url('/img/original/11.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/11.jpg') }}" alt="img11" />
						<div class="description description--grid">Quixotic</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="{{ url('/img/original/1.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/1.jpg') }}" alt="img01" />
						<div class="description description--grid">Assemblage</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="{{ url('/img/original/2.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/2.jpg') }}" alt="img02" />
						<div class="description description--grid">Demesne</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="{{ url('/img/original/3.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/3.jpg') }}" alt="img03" />
						<div class="description description--grid">Felicity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="{{ url('/img/original/4.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/4.jpg') }}" alt="img04" />
						<div class="description description--grid">Propinquity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="{{ url('/img/original/5.jpg') }}" class="img-wrap"><img src="{{ asset('/img/thumbs/5.jpg') }}" alt="img05" />
						<div class="description description--grid">Ephemeral</div>
					</a>
				</div>
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>

@endsection