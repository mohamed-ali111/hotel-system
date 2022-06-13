<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Model\BookingRoom;
use Illuminate\Support\Facades\Auth;

class Add_booking extends Notification
{
    use Queueable;
    private $id_booking;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( BookingRoom $id_booking)
    {
        $this->id_booking = $id_booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    public function toDatabase($notifiable)
    {
        return [
                        //'data' => $this->details['body']

            // 'offer_id' => $this->offerData['offer_id']

            'id'=> $this->id_booking->id,
             'title'=>'booking has benn added by',
             'user' =>Auth::user()->name,
        ];
    }

}
