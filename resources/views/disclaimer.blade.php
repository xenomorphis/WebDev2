@extends('base')

@section('styles')
	.fulltext > p > a {
		color: rgb(242,249,0);
		text-shadow: 1px 1px #444;
		font-style: italic;
		}
		
	.fulltext > p > a:hover {
		color: rgb(46,42,136);
		text-shadow: 1px 1px #CCC;
		text-decoration: none;
		}
@endsection

@section('maincontent')
	<div class="fulltext">
		<p><h3 class="highlight-text">Allgemeine Datenschutzerklärung</h3></p>
		<p>Durch die Nutzung unserer Website erklären Sie sich mit der Erhebung, Verarbeitung und Nutzung von Daten gemäß der nachfolgenden Beschreibung einverstanden. Unsere Website kann grundsätzlich ohne Registrierung besucht werden. Dabei werden Daten wie beispielsweise aufgerufene Seiten bzw. Namen der abgerufenen Datei, Datum und Uhrzeit zu statistischen Zwecken auf dem Server gespeichert, ohne dass diese Daten unmittelbar auf Ihre Person bezogen werden. Personenbezogene Daten, insbesondere Name, Adresse oder E-Mail-Adresse werden soweit möglich auf freiwilliger Basis erhoben. Ohne Ihre Einwilligung erfolgt keine Weitergabe der Daten an Dritte.</p>
		<br/> <br/>
		<p><h3 class="highlight-text">Datenschutzerklärung für Cookies</h3></p>
		<p>Unsere Website verwendet Cookies. Das sind kleine Textdateien, die es möglich machen, auf dem Endgerät des Nutzers spezifische, auf den Nutzer bezogene Informationen zu speichern, während er die Website nutzt. Cookies ermöglichen es, insbesondere Nutzungshäufigkeit und Nutzeranzahl der Seiten zu ermitteln, Verhaltensweisen der Seitennutzung zu analysieren, aber auch unser Angebot kundenfreundlicher zu gestalten. Cookies bleiben über das Ende einer Browser-Sitzung gespeichert und können bei einem erneuten Seitenbesuch wieder aufgerufen werden. Wenn Sie das nicht wünschen, sollten Sie Ihren Internetbrowser so einstellen, dass er die Annahme von Cookies verweigert.</p>
		<p>Quelle: <a href="https://www.anwalt.de/vorlage/muster-datenschutzerklaerung.php">Muster-Datenschutzerklärung von anwalt.de</a></p>	
	</div>
@endsection