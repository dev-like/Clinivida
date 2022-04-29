<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Convenios extends Model
{
    public const PATH_ANEXO = 'uploads/convenios';

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'logo',
        'link',
    ];

    /**
     * @param  UploadedFile  $value
     */
    public function setLogoAttribute(UploadedFile $value)
    {
        if ($this->logo) {
            Storage::disk('public_upload')
                ->delete(sprintf('%s/%s', 'convenios', $this->logo));
        }
        $this->attributes['logo'] = $value
            ->move(
                public_path(
                    self::PATH_ANEXO
                ),
                sprintf('%s.%s', md5(Carbon::now()), $value->extension())
            )
            ->getFilename();
    }

    protected static function boot()
    {
        parent::boot();

        $deleteCallback = function ($convenio) {
            Storage::disk('public_upload')
                ->delete(sprintf('%s%s', 'convenios/', $convenio->logo));
        };
        static::deleting($deleteCallback);
    }
}
