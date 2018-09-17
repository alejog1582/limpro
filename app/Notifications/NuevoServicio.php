<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoServicio extends Notification {
	use Queueable;

	public $servicio;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct(Servicio $servicio) {
		$this->servicio = $servicio;
	}

	/**
	 * Get the notification's delivery channels.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function via($notifiable) {
		return ['mail'];
	}

	/**
	 * Get the mail representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return \Illuminate\Notifications\Messages\MailMessage
	 */
	public function toMail($notifiable) {
		return (new MailMessage)
			->subject('Servicio Solicitado Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Gracias por elegirnos. Recibimos tu solicitud donde la forma de pago seleccionada a sido consignacion bancaria. A continuacion encontraras los numeros de cuenta a los cuales podras consignar:')
			->line('Banco Davivienda: 004470467319 ahorros')
			->line('Bancolombia: 03118262548 ahorros')
			->line('Recuerda que el valor a pagar es: $ ' . $this->servicio->valor_plan)
			->line('Una vez realizado el pago debes enviar el soporte al email servicios@solsercol.co o via whatsapp al numero  350 4591097 para proceder con la asignacion del personal disponible para atender tu solicitud.')
			->action('Ingresa a tu cuenta', url('/micuenta'))
			->salutation(' Gracias por preferiri Limpro, recuerde que trabajamos por s
				tu comidad.');
	}

	/**
	 * Get the array representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function toArray($notifiable) {
		return [
			//
		];
	}
}
