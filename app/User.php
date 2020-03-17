<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = User::where('id', Auth::User()->id)->first();

        $user_form = FormResult::where('user_id', $user->id)->first();

        $form_array = [
            "creativity" => $user_form->creativity,
            "autonomy" => $user_form->autonomy,
            "rigor" => $user_form->rigor,
            "teamwork" => $user_form->teamwork,
            "evaluation_method" => $user_form->evaluation_method,
            "digital" => $user_form->digital,
            "science" => $user_form->science,
            "literature" => $user_form->literature,
            "foreign_lang" => $user_form->foreign_lang
        ];
        $maxi = max($form_array);
        $max = array_keys($form_array, max($form_array));

        $max1 = array_values($max);
        $count = count($max1);

        $maximum = implode(" ", $max);

        if ($count == 1){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->get();
            return $forms;
        } elseif($count == 2){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->get();
            return $forms;
        } elseif ($count == 3){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1, '=', $maxi)
                ->get();
            return $forms;
        }elseif ($count == 4) {
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->get();
            return $forms;
        }elseif ($count == 5){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->orWhere($max1[4], '=', $maxi)
                ->get();
            return $forms;
        }elseif ($count == 6){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->orWhere($max1[4], '=', $maxi)
                ->orWhere($max1[5], '=', $maxi)
                ->get();
            return $forms;
        }elseif ($count == 7){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->orWhere($max1[4], '=', $maxi)
                ->orWhere($max1[5], '=', $maxi)
                ->orWhere($max1[6], '=', $maxi)
                ->get();
            return $forms;
        }elseif ($count == 8){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->orWhere($max1[4], '=', $maxi)
                ->orWhere($max1[5], '=', $maxi)
                ->orWhere($max1[6], '=', $maxi)
                ->orWhere($max1[7], '=', $maxi)
                ->get();
            return $forms;
        }elseif($count == 9){
            $forms = FormResult::where($max1[0], '=', $maxi)
                ->orWhere($max1[1], '=', $maxi)
                ->orWhere($max1[2], '=', $maxi)
                ->orWhere($max1[3], '=', $maxi)
                ->orWhere($max1[4], '=', $maxi)
                ->orWhere($max1[5], '=', $maxi)
                ->orWhere($max1[6], '=', $maxi)
                ->orWhere($max1[7], '=', $maxi)
                ->orWhere($max1[8], '=', $maxi)
                ->get();
            return $forms;
        }

        //$users = User::where($forms, '=', 'id');

        /*
        foreach($forms as $form) {
            $forms_array = [
                "id" => $form->id,
                "user" => $form->user_id,
                "creativity" => $form->creativity,
                "autonomy" => $form->autonomy,
                "rigor" => $form->rigor,
                "teamwork" => $form->teamwork,
                "evaluation_method" => $form->evaluation_method,
                "digital" => $form->digital,
                "science" => $form->science,
                "literature" => $form->literature,
                "foreign_lang" => $form->foreign_lang
            ];

            $other_max = (array_keys($forms_array, max(
                $forms_array["creativity"],
                $forms_array["autonomy"],
                $forms_array["rigor"],
                $forms_array["teamwork"],
                $forms_array["evaluation_method"],
                $forms_array["digital"],
                $forms_array["science"],
                $forms_array["literature"],
                $forms_array["foreign_lang"]
            )));

            $other_max_str = implode(" ", $other_max);

            if($other_max_str == $maximum){
                dump($other_max_str);
            }
        }
        //dump(array_keys($forms_array, max($forms_array)));
        */

        //return $maximum;
    }
}
