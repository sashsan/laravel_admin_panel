<?php

    namespace App\Models;

    namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    /**
     * Class User
     * @package App\Models
     */
    class User extends Authenticatable
    {
        use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
            'email',
            'password',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];


        public function roles()
        {
            return $this->belongsToMany(Role::class, 'user_role');
        }

        public function isAdministrator()
        {
            $admin = $this->roles()->where('name', 'admin')->exists();
            if ($admin) return "admin";

        }

        public function isUser()
        {
            $user = $this->roles()->where('name', 'user')->exists();
            if ($user) return "user";
        }

        public function isDisabled()
        {
            $disabled = $this->roles()->where('name', 'disabled')->exists();
            if ($disabled) return "disabled";
        }



//        public function isDisabled()
//        {
//            return $this->statusCheck();
//        }
//
//        public function isVisitor()
//        {
//            return $this->statusCheck(1);
//        }
//
//        public function isAdmin()
//        {
//            return $this->statusCheck(2);
//        }
//
//        public function statusCheck($status = 0)
//        {
//            return $this->status === $status ? true : false;
//        }


    }

