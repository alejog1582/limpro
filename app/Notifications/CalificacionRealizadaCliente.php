<?php

namespace App\Notifications;

use App\Calificacione;
use App\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CalificacionRealizadaCliente extends Notification {
	use Queueable;

	public $servicio;
	public $calificacione;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct(Servicio $servicio, Calificacione $calificacione) {
		$this->servicio = $servicio;
		$this->calificacione = $calificacione;
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
			->subject('Calificacion Realizada Servicio Id ' . $this->servicio->id)
			->greeting('Hola ' . $notifiable->name)
			->line('Se a calificado el servicio exitosamente para el funcionario ' . $this->servicio->funcionario_selec->nombre_funcionario . ' La calificacion dada es de ' . $this->calificacione->cal_total . '. Recuerde que siempre estamos en constante mejoramiento para brindarle un mejor servicio dia a dia')
			->line('Al completar 10 servicios calificados podra canjear un servicio totalmente gratis')
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
