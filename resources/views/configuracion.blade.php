@extends('layouts.template')

@section('platform')
	<a class="navbar-brand" href="#page-top">{{ $configuraciones[0]['valor'] }}</a>
@endsection

@section('portfolio')
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ $configuraciones[1]['valor'] }}</h2>
@endsection

@section('titleabout')
  <h2 class="page-section-heading text-center text-uppercase text-white">{{ $configuraciones[2]['valor'] }}</h2>
@endsection

@section('linkdownloadcv')
	<div class="text-center mt-4">
    <a class="btn btn-xl btn-outline-light" href="{{ $configuraciones[3]['valor'] }}" target="_blank" rel="noopener">
      <i class="fas fa-download me-2"></i>
      Descarga mi CV
    </a>
  </div>
@endsection

@section('titleservice')
  <h2 class="page-section-heading text-center text-uppercase text-white">{{ $configuraciones[4]['valor'] }}</h2>
@endsection

@section('titlecontact')
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ $configuraciones[5]['valor'] }}</h2>
@endsection

@section('email')
	<div class="text-center mt-4">
    <form class="contact-form mb-3" autocomplete="off">
      <input
      	class="form-control mb-3"
        type="text"
        name="name"
        id="name"
        placeholder="Escribe tu nombre *"
        title="Nombre sólo acepta letras y espacios en blanco"
        pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
        required
      />
      <input
      	class="form-control mb-3"
        type="email"
        name="email"
        id="email"
        placeholder="Escribi tu correo *"
        title="Email incorrecto"
        pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"
        required
      />
      <textarea
      	style="resize: none;"
      	class="form-control mb-3"
        name="comments"
        id="comments"
        rows="5"
        placeholder="Déjame tus comentarios *"
        required
      ></textarea>
      <div class="contact-form-loader text-center mb-3 d-none">
        <img src="{{ asset('storage/icons/loader.svg') }}" alt="loading..." />
      </div>
    	<input type="submit" class="btn btn-success btn-xl" value="ENVIAR MENSAJE" />
    </form>
    <div class="alert alert-success alert-dismissible fade show d-none" id="success" role="alert">
  		<strong>!Muchas Gracias! Por Tus Comentarios</strong>
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<div class="alert alert-danger alert-dismissible fade show d-none" id="error" role="alert">
  		<strong>Error:</strong> Ocurrio un error al enviar, intenta nuevamente
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
    <script type="text/javascript">
		((d) => {
		  const $form = d.querySelector(".contact-form");
		  const $loader = d.querySelector(".contact-form-loader");
		  const $success = d.querySelector("#success");
		  const $error = d.querySelector("#error");
		  const email = @json($configuraciones[6]['valor']);

		  $form.addEventListener("submit", (e) => {
		    e.preventDefault();
		    $loader.classList.remove("d-none");
		    fetch(`https://formsubmit.co/ajax/${email}`, {
		      method: "POST",
		      body: new FormData(e.target),
		    })
		      .then((res) => (res.ok ? res.json() : Promise.reject(res)))
		      .then((json) => {
		        $form.reset();
		        $loader.classList.add("d-none");
		        $success.classList.remove("d-none");
		      })
		      .catch((err) => {
		        $loader.classList.add("d-none");
		        $error.classList.remove("d-none");
		      });
		  });
		})(document);
		</script>
  </div>
@endsection

@section('location')
  <div class="col-lg-6 mb-5 mb-lg-0">
  	<h4 class="text-uppercase mb-4">{{ $configuraciones[7]['valor'] }}</h4>
		<p class="lead mb-0">
    	{{ $configuraciones[8]['valor'] }}
  	</p>
	</div>
@endsection

@section('socialmedia')
  <div class="col-lg-6 mb-5 mb-lg-0">
  	<h4 class="text-uppercase mb-4">{{ $configuraciones[9]['valor'] }}</h4>
  	<a class="btn btn-outline-light btn-social mx-1" href="{{ $configuraciones[10]['valor'] }}" target="_blank" rel="noopener"><i class="fab fa-fw fa-linkedin-in"></i></a>
  	<a class="btn btn-outline-light btn-social mx-1" href="tel:{{ $configuraciones[11]['valor'] }}"><i class="fab fa-fw fa-whatsapp"></i></a>
  	<a class="btn btn-outline-light btn-social mx-1" href="{{ $configuraciones[12]['valor'] }}" target="_blank" rel="noopener"><i class="fab fa-fw fa-github"></i></a>
	</div>
@endsection

@section('footer')
  <div class="container"><small>Copyright &copy; {{ $configuraciones[0]['valor'] }} {{ date('Y') }}</small></div>
@endsection