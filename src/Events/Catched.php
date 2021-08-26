<?php

namespace TyrantG\UEditor\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Catched.
 *
 * @author yueziii <i@yueziii.com>
 */
class Catched
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var array
     */
    public $result;

    /**
     * Catched constructor.
     *
     * @param array  $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

}
