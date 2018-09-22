@extends('layouts.app')

@section('content')

<div class="row center blue-color sin-espacio">
   	<div class="col s12 m4 offset-m4">
     	<div class="card-panel green-color">
        	<span class="white-text">El servicio a sido solicitado bajo el id: <b>	{{ $servicio->id }}</b>.
        	</span>
      	</div>
    </div>
</div>
<div class="row blue-color white-text center sin-espacio">
@if ( $servicio->metodo_pago == 'consignacion')
	<div class="col s12 m4 offset-m4">
     	<div class="card-panel blue-color-light">
        	<span>Gracias por elegirnos. Recibimos tu solicitud donde la forma de pago seleccionada a sido consignacion bancaria. A continuación encontraras los numeros de cuenta a los cuales podras consignar:
        	<br><br>Davivienda: 004470467319 ahorros
        	<br>Bancolombia: 004470467319 ahorros
        	<br>	<br>
          Recuerda que el valor a pagar es: $ {{ $servicio->valor_plan }}
          <br><br>
        	Una vez realizado el pago debes enviar el soporte al email servicios@solsercol.co o via whatsapp al numero  350 4591097 para proceder con la asignación del personal disponible para atender tu solicitud.
        	</span>
        	<br><br>
        	<a href="/" class="btn green-color">Aceptar</a>
          <br>
        </div>
          <br>
    </div>
@endif
@if ( $servicio->metodo_pago == 'payu' )
	<div class="col s12 m4 offset-m4">
     	<div class="card-panel blue-color-light">
        	<span class="white-text">Gracias por elegirnos. Recibimos tu solicitud donde la forma de pago seleccionada es PayU. El siguiente boton te llevara a la plataforma segura PayU, donde podras realizar el pago con toda la seguridad que ofrece la plataforma.
        	<br><br>
          @if ($servicio->plan == 4)
              <a href="https://biz.payulatam.com/B0b12f00CA68FF2" target="_blank"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_grande.png"></a>
          @endif
          @if ($servicio->plan == 8)
            <a href="https://biz.payulatam.com/B0b12f070295EC1" target="_blank"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_grande.png"></a>
          @endif
        	<br><br>
        	Una vez recibamos el pago, te enviaremos un correo de confirmacion y podras ingresar a tu cuenta para seleccionar el colaborador que te prestara el servicio.
        	</span>
          <br>
      	</div>
        <br>
    </div>
@endif
@if ( $servicio->metodo_pago == 'canje' )
  <div class="col s12 m4 offset-m4">
      <div class="card-panel blue-color-light">
          <span class="white-text">Tu canje a sido exitoso. Recuerda que este servicio no genera pago. Procederemos a asignaran los funcionarios disponibles y te notificaremos a tu direccion de email para que puedas seleccionar el de tu preferencia.
          <br><br>
          <a href="/" class="btn green-color">Aceptar</a>
          <br><br>
          </span>
        </div>
    </div>
@endif
</div>
@endsection