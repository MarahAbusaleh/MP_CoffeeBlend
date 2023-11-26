<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class ContactMessage extends Model
{
    use HasFactory;

    protected $table = 'contact_messages';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "marah.abusaleh12@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
