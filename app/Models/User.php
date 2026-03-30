<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'zipcode',
        'image',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function isDeliveryman(): bool
    {
        return $this->user_type === 'deliveryman';
    }

    public function isCustomer(): bool
    {
        return $this->user_type === 'customer';
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }



     // Orders assigned to this deliveryman
    public function assignedOrders()
    {
        return $this->hasMany(Order::class, 'deliveryman_id');
    }

    // Notifications for this deliveryman
    public function deliveryNotifications()
    {
        return $this->hasMany(Deliveryman_notification::class, 'deliveryman_id');
    }
}
