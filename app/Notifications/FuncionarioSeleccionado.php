<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FuncionarioSeleccionado extends Notification {
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
			->subject('Funcionario Seleccionado Servicio Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Se a seleccionado el funcianario ' . $this->servicio->funcionario_selec->nombre_funcionario . ' para el dia ' . $this->servicio->fecha_servicio)
			->action('Ingrese a su cuenta', url('/micuenta'))
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
