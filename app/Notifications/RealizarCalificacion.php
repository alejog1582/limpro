<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RealizarCalificacion extends Notification {
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
			->subject('Califica el Servicio Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Seguimos trabajando para construir una mejor compañía de servicio de limpieza, motivo por el cual agradecemos su colaboración realizando la calificación del servicio prestado en el siguiente Link. Gracias y esperamos contar con usted(es) en una próxima ocasión.')
			->action('Calificar Servicio', url('/seleccion/servicio/' . $this->servicio->id))
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
