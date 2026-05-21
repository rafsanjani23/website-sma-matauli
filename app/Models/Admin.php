<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public const ROLE_SUPER_ADMIN = 'super_admin';
    public const ROLE_ADMIN_SEKOLAH = 'admin_sekolah';
    public const ROLE_ADMIN_ASRAMA = 'admin_asrama';

    public const ASSIGNABLE_ROLES = [
        self::ROLE_ADMIN_SEKOLAH,
        self::ROLE_ADMIN_ASRAMA,
    ];

    public const ROLE_LABELS = [
        self::ROLE_SUPER_ADMIN => 'Super Admin',
        self::ROLE_ADMIN_SEKOLAH => 'Admin Sekolah',
        self::ROLE_ADMIN_ASRAMA => 'Admin Asrama',
    ];

    protected $table = 'admins';

    protected $fillable = [
        'username',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function isSuperAdmin(): bool
    {
        return $this->role === self::ROLE_SUPER_ADMIN;
    }

    public function isAdminSekolah(): bool
    {
        return $this->role === self::ROLE_ADMIN_SEKOLAH;
    }

    public function isAdminAsrama(): bool
    {
        return $this->role === self::ROLE_ADMIN_ASRAMA;
    }

    public function canAccessAsrama(): bool
    {
        return $this->isSuperAdmin() || $this->isAdminAsrama();
    }

    public function canAccessSekolah(): bool
    {
        return $this->isSuperAdmin() || $this->isAdminSekolah();
    }

    public function canManageAdmins(): bool
    {
        return $this->isSuperAdmin();
    }

    public function getRoleLabelAttribute(): string
    {
        return self::ROLE_LABELS[$this->role] ?? $this->role;
    }
}
