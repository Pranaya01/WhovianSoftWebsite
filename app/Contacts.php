<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contacts extends Model
{

    protected $table = 'contacts';
    protected $fillable = ['name', 'phonenumber', 'email', 'requirement', 'message'];

}

