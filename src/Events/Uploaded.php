<?php


namespace TyrantG\UEditor\Events;


use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Uploading.
 *
 * @author overtrue <i@overtrue.me>
 */
class Uploaded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public $file;

    /**
     * @var array
     */
    public $result;

    /**
     * Uploaded constructor.
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @param array $result
     */
    public function __construct(UploadedFile $file, array $result)
    {
        $this->file = $file;
        $this->result = $result;
    }

}
