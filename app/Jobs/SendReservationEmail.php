<?php

namespace App\Jobs;

use App\Mail\ReservationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendReservationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //send mail to the user and to the admin
        try {
            Mail::to(env('ADMIN_EMAIL'))->send(new ReservationMail($this->data));
            Mail::to($this->data['email'])->send(new ReservationMail($this->data));
        } catch (\Exception $e) {
            //log the error
            \Log::error('Error sending email: ' . $e->getMessage());
        }
    }
}
