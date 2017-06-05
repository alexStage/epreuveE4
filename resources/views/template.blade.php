<!DOCTYPE html>
<html>
	<head>
		<title>IdoLogis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />
                <script language="JavaScript" type="text/javascript" src="{{URL::asset('js/jQuery.js')}}"></script>
                <script language="JavaScript" type="text/javascript" src="{{URL::asset('js/recherche.js')}}"></script>
	</head>
	<body>	

		<!-- Bandeau avec le logo, les coordonnées et le menu -->
		<div id="bandeau">
			<!-- Logo -->
			<div id="bandeau_logo">
				<a href="index.php"><img src="{{URL::asset('img/logo.png')}}" alt="IdoLogis" class="menu" height="100" width="223"/></a>
			</div>

			<div id="bandeau_coord">
				@if(isset($infos))
					<p class="coord">{{$infos->adresse}}<br />Téléphone : {{$infos->telephone}} - Fax : {{$infos->fax}}</p>
				@endif
			</div>
		
			<!-- Menu -->
			<div id="bandeau_menu">
				<p class="bandeau">
					<a href="{{URL::to('/')}}" id="menu_accueil"></a>
					<a href="{{URL::route('ventes')}}" id="menu_ventes"></a>
					<a href="{{URL::route('locations')}}" id="menu_locations"></a>
					<a href="{{URL::route('contacts')}}" id="menu_contact"></a>
				</p>
			</div>
			<div id="login">
				@if(Auth::check() == false)<!-- Si la personne est connectée afficher se déco sinon afficher se co -->
		            <a href="{{URL::to('login')}}">se connecter</a>
		         @else
		            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">se déconnecter</a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <p>connecté: {{ Auth::user()->name }}</p>
				@endif
			</div>
		</div>
		
		<!-- Contenu de la page -->
		@yield('content')

	</body>
</html>