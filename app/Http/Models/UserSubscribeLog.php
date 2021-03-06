<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户订阅地址请求日志
 * Class UserSubscribeLog
 * @package App\Http\Models
 */
class UserSubscribeLog extends Model
{
    protected $table = 'user_subscribe_log';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'sid',
        'request_ip',
        'request_time',
        'request_header',
    ];
}