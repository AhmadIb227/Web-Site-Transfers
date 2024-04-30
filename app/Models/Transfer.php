<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = ['Number', 'RecipientOffice', 'SendOffice', 'Value', 'Date','Sender','Receiver'];
    protected $table = 'transfers';

    public function offices()
    {
        return $this->belongsTo(Office::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
   // app/Models/Transfer.php

    

    
}