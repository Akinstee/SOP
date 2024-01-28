<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'date_of_birth',
        'phone_number',
        'available_on_whatsapp',
        'city_from',
        'current_city',
        'employment_status',
        'study_status',
        'has_computer_and_internet',
        'skill_experience',
        'how_did_you_hear_about_us',
        'acknowledge_terms_and_privacy',
        'contact_me_about_application',
    ];

    // Validation rules
    public static $validationRules = [
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
        'password' => 'required|string|min:8|confirmed',
        'gender' => ['required', 'in:male,female'],
        'date_of_birth' => ['required', 'date'],
        'phone_number' => ['required', 'string', 'max:20'],
        'available_on_whatsapp' => ['required', 'in:yes,no'],
        'city_from' => ['required', 'string', 'max:255'],
        'current_city' => ['required', 'string', 'max:255'],
        'employment_status' => ['required', 'in:full_time,part_time,unemployed'],
        'study_status' => ['required', 'in:full_time,part_time,not_studying'],
        'has_computer_and_internet' => ['required', 'in:yes,no'],
        'skill_experience' => ['required', 'in:none,basic,intermediate,advance'],
        'how_did_you_hear_about_us' => ['required', 'in:from_a_friend,whatsapp_group,facebook,x,instagram'],
        'acknowledge_terms_and_privacy' => ['required', 'accepted'],
        'contact_me_about_application' => ['required', 'in:yes,no'],
    ];

    // Validator method
    public static function validator(array $data)
    {
        return validator($data, self::$validationRules);
    }

    // You can use this method in your controller
    public static function validateStudent(array $data)
    {
        return self::validator($data)->validate();
    }

    protected $hidden = [
        'password',
        'api_token',
    ];

    public function profile()
    {
        return $this->hasOne(Student::class);
    }

    public function getNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}
