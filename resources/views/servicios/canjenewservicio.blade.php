@extends('layouts.app')

@section('content')

<div class="row center">
   	<div class="col s4 offset-s4">
     	<div class="card-panel teal">
        	<span class="white-text">El servicio a sido solicitado bajo el id: <b>	{{ $servicio->id }}</b>.
        	</span>
      	</div>
    </div>
</div>
<div class="row">
@if ( $servicio->metodo_pago == 'consignacion')
	<div class="col s4 offset-s4">
     	<div class="card-panel">
        	<span class="blck-text">La forma de pago seleccionada a sido consignacion bancaria. A continuación encontraras los numeros de cuenta:
        	<br><br>Davivienda: 004470467319 ahorros
        	<br>Bancolombia: 004470467319 ahorros
        	<br>	<br>
        	Una vez realizado el pago enviar copia de pago al email pagos@solsercol.com. Recibido el pago podrás ingresar a tu cuenta para seleccionar el colaborador que te prestara el servicio.
        	</span>
        	<br><br>
        	<a href="/" class="btn waves-effect waves-light">Aceptar</a>
      	</div>
    </div>
@endif
@if ( $servicio->metodo_pago == 'payu' )
	<div class="col s4 offset-s4">
     	<div class="card-panel teal">
        	<span class="white-text">La forma de pago seleccionada a sido PayU. El siguiente boton te llevara a la plataforma segura PayU, donde podras realizar el pago con toda la seguridad que ofrece la plataforma.
        	<br><br>
        	<a href="/newservicio/pago/confirmacion" class="btn waves-effect waves-light">PayU</a>
        	<br><br>
        	Una vez recibamos el pago te enviaremos un correo confirmando tu pago y podras ingresar a tu cuenta para seleccionar el colaborados que te prestara el servicio.
        	</span>
      	</div>
    </div>
@endif
</div>
@endsection