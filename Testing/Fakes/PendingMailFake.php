<?php

namespace IgniteKit\Backports\Support\Testing\Fakes;

use IgniteKit\Backports\Mail\PendingMail;
use IgniteKit\Backports\Contracts\Mail\Mailable;

class PendingMailFake extends PendingMail
{
    /**
     * Create a new instance.
     *
     * @param  \IgniteKit\Backports\Support\Testing\Fakes\MailFake  $mailer
     * @return void
     */
    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Send a new mailable message instance.
     *
     * @param  \IgniteKit\Backports\Contracts\Mail\Mailable $mailable;
     * @return mixed
     */
    public function send(Mailable $mailable)
    {
        return $this->sendNow($mailable);
    }

    /**
     * Send a mailable message immediately.
     *
     * @param  \IgniteKit\Backports\Contracts\Mail\Mailable $mailable;
     * @return mixed
     */
    public function sendNow(Mailable $mailable)
    {
        $this->mailer->send($this->fill($mailable));
    }

    /**
     * Push the given mailable onto the queue.
     *
     * @param  \IgniteKit\Backports\Contracts\Mail\Mailable $mailable;
     * @return mixed
     */
    public function queue(Mailable $mailable)
    {
        return $this->mailer->queue($this->fill($mailable));
    }
}
