<?php

    namespace App\Models\Admin;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class User extends Model
    {

        use SoftDeletes;


        protected $fillable = [
            'id',
            'name',
            'email',
            'password',
        ];


        protected $hidden = [
            'password',
            'remember_token',
        ];


        protected $casts = [
            'email_verified_at' => 'datetime',
        ];


        /**
         * Роли, принадлежащие пользователю.
         */
        public function roles()
        {
            return $this->belongsToMany('App\Models\Role','user_roles');
        }




    }

