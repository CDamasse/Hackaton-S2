<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function school()
    {
        return $this->hasOne('App\School');
    }

    public function formresult()
    {
        return $this->hasOne('App\FormResult');
    }

    public function max()
    {
        $user_form = FormResult::where('user_id', Auth::User()->id)->first();

        $form_array = [
            "creativity"        => $user_form->creativity,
            "autonomy"          => $user_form->autonomy,
            "rigor"             => $user_form->rigor,
            "teamwork"          => $user_form->teamwork,
            "evaluation_method" => $user_form->evaluation_method,
            "digital"           => $user_form->digital,
            "science"           => $user_form->science,
            "literature"        => $user_form->literature,
            "foreign_lang"      => $user_form->foreign_lang,
        ];

        $maxi     = max($form_array);
        $max_keys = array_keys($form_array, $maxi);

        $query = FormResult::where($max_keys[0], '=', $maxi);
        foreach (array_slice($max_keys, 1) as $key) {
            $query->orWhere($key, '=', $maxi);
        }

        return $query->get();
    }
}
