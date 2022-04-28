<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Pedido extends Model
{
  public const PATH_ANEXO = 'uploads/NF';

  use HasFactory;
  use SoftDeletes;

  protected $fillable = [
      "file",
      "titulo",
      "cliente_id",

  ];

  /**
   * @param  UploadedFile  $value
   */
   public function setFileAttribute(UploadedFile $value)
   {
       if ($this->file) {
           Storage::disk('public_upload')
               ->delete(sprintf('%s%s', 'NF/', $this->file));
       }
       $this->attributes['file'] = $value
           ->move(
               public_path(
                   self::PATH_ANEXO
               ),
               sprintf('%s.%s', md5(Carbon::now()), "pdf")
           )
           ->getFilename();
   }

   public function setTituloAttribute($value)
   {
       $this->attributes['titulo'] = $value;
       $this->attributes['slug'] = Str::slug($value, '-');
   }


  /**
   * @return HasMany
   */
  public function boleto(): HasMany
  {
      return $this->hasMany(Boleto::class, 'pedido_id');
  }

  protected static function boot()
  {
      parent::boot();

      $deleteCallback = function ($pedido) {
          Storage::disk('public_upload')
              ->delete(sprintf('%s%s', 'NF/', $pedido->file));
      };
      static::deleting($deleteCallback);
  }
}
