<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Especialidade extends Model
{
    public const PATH_ANEXO = 'uploads/especialidades';

    use HasFactory;
    use SoftDeletes;

    protected $table = 'cadastros';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'image',
        'tipo',
    ];

    /**
     * @param  UploadedFile  $value
     */
    public function setImageAttribute(UploadedFile $value)
    {
        if ($this->image) {
            Storage::disk('public_upload')
                ->delete(sprintf('%s%s', 'especialidades/', $this->image));
        }
        $this->attributes['image'] = $value
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

        $deleteCallback = function ($especialidade) {
            Storage::disk('public_upload')
                ->delete(sprintf('%s%s', 'especialidades/', $especialidade->image));
        };
        static::deleting($deleteCallback);
    }
}
