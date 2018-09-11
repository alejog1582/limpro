<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SeleccionFuncionario extends Notification {
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
			->subject('Seleccion Funcioanario Servicio Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Hemos recibido el pago del servicio y se han asignado los funcionarios que estan disponibles para el dia ' . $this->servicio->fecha_servicio . ' Ingrese en el siguente link y realice la seleccion de la persona que mas le guste previa revision de calificaciones y comentarios de otros usuarios.')
			->action('Ingrese a su cuenta', url('/seleccion/servicio/' . $this->servicio->id))
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
