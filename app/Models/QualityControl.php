<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class QualityControl extends Model
{

    use Status;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'full_name', 'phone', 'comment'];

    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('full_name', 'like', '%' . $search . '%');
    }

    /**
     * @return string[]
     */
    public static function statuses()
    {
        return [
            self::$status_active => "O'qildi",
            self::$status_inactive => "O'qilmadi"
        ];
    }
}
