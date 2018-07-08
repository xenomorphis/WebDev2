@extends('base')

@section('styles')
	h2 {
		padding-bottom: 25px;	
		}
	
	h4 {
		font-family: 'Source Sans Pro';
		text-decoration: underline;
		}
@endsection

@section('maincontent')
	<div class="fulltext">
		<h2 class="highlight-text"> Impressum </h2>
		<h4>Anschrift</h4>
		<p>Hochschule für angewandte Wissenschaften Hof <br>
		Web Development 2 - Spotlight Events, NAC <br> <br>
		Geb&auml;ude B, Raum 010 <br>
		Alfons-Goppel-Platz 1 <br>
		95028 Hof</p>
		<br> <br>
		<p><strong>Verantwortlich für den Inhalt:</strong><br>
		Christoph Deeg, Joachim Grießhammer, Christiane Pätzold, Marco R. Wachter</p>
	</div>
@endsection