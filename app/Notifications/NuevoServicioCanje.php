<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoServicioCanje extends Notification {
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
			->subject('Servicio de Canje Solicitado Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Tu canje a sido exitoso. Recuerda que este servicio no genera pago. Procederemos a asignaran los funcionarios disponibles y te notificaremos a tu direccion de email para que puedas seleccionar el de tu preferencia.')
			->action('Ingrese a su cuenta', url('/micuenta'))
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
