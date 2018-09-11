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
			->line('Tu servicio se a solicitado con exito. A continuacion encontraras el link de pago que te llevara a la plataforma segura de pagos PayU.')
			->action('PayU', url('https://biz.payulatam.com/B0b12f070295EC1'))
			->line('Una vez recibido el pago, le enviaremos el link donde podra seleecionar la funcionaria que le prestara el servicio. Recuede que tambien puende seleccionar la funcionaria ingresando a Mi Cuenta.')
			->salutation(' Gracias por preferiri Limpro, recuerde que trabajamos por su comidad.');
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
