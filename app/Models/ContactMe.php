<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'contactme';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'subject', 
        'message',
    ];

    /**
     * Save Contact me enquiry.
     */
    public function edit()
    {
        $postData = request()->only(['name', 'email', 'subject', 'message']);
        unset($postData['_token']);
        $this->forceFill($postData);
        $this->created_at = time();
        $this->updated_at = time();
        $this->save();
    }

    /**
     * Returns validation rules for ContactUs Model.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:filter', 'max:100'],
            'subject' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string']
        ];
    }

    /**
     * Returns Total Contact Count.
     *
     * @return int
     */
    public static function totalContactCount()
    {
        return self::count();
    }

    /**
     * Returns last 5 contact entries
     * 
    */
    public static function getRecentContacts()
    {
        return self::orderBy('id', 'DESC')
        ->distinct()->limit(5)
        ->get()
        ->toArray();
    }

}
