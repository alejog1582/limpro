<?php

namespace App\Notifications;

use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FuncionarioSeleccionadoCliente extends Notification {
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
			->line('Tu seleccion ha sido exitosa. La funcionaria: ' . $this->servicio->funcionario_selec->nombre_funcionario . ' llegará a la direccion el dia ' . $this->servicio->fecha_servicio . ' a las ' . $this->servicio->hora_inicio . ' , identificandose previamente como nuestra funcionaria.')
			->line('Cualquier novedad por favor informarla inmediatamente al 350 459 10 97.')
			->line('Recuerda calificar el servicio una vez realizado, para poder brindar una mejor experiencia.')
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
