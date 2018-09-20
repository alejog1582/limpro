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
			->line('En Limpro queremos agradecerle por elegirnos como una alternativa para la prestación de servicios de limpieza. Desde ya puedes acceder al siguiente link donde encontraras nuestros funcionarios disponibles para el día ' . $this->servicio->fecha_servicio . ', con el fin de seleccionar el de tu preferencia. De igual forma  podrás elegir la opción de Selección Aleatoria en caso que lo desees.')
			->action('Seleccion de Funcionario', url('/seleccion/servicio/' . $this->servicio->id))
			->salutation('Gracias por preferirnos, somos tu aliado en servicios de limpieza.');
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
