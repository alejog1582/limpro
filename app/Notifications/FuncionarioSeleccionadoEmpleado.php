<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FuncionarioSeleccionadoEmpleado extends Notification {
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
			->subject('Nuevo servicio para el dia ' . $this->servicio->fecha_servicio)
			->greeting('Hola ' . $notifiable->name)
			->line('Se le a asignado un nuevo servicio. A continuacion encontrara los datos del servicio: ')
			->line('Fecha de servicio: ' . $this->servicio->fecha_servicio)
			->line('Plan: ' . $this->servicio->plan)
			->line('Hora de Inicio: ' . $this->servicio->hora_inicio)
			->line('Direccion: ' . $this->servicio->direccion_servicio)
			->line('Detalle de Direccion: ' . $this->servicio->detalle_direccion)
			->salutation('Recuerde prestar el mejor servicio.');
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
