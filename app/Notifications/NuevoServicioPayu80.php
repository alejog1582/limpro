<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoServicioPayu80 extends Notification {
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
			->line('Gracias por elegirnos. Recibimos tu solicitud donde la forma de pago seleccionada es PayU. El siguiente boton te llevara a la plataforma segura PayU, donde podras realizar el pago con toda la seguridad que ofrece la plataforma.')
			->action('PayU', url('https://biz.payulatam.com/B0b12f070295EC1'))
			->line('Una vez recibamos el pago, te enviaremos un correo de confirmacion y podras ingresar a tu cuenta para seleccionar el colaborador que te prestara el servicio.')
			->salutation(' Gracias por preferiri Limpro, recuerde que trabajamos por tu comidad.');
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
