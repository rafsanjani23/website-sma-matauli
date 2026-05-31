<?php

namespace Tests\Feature;

use App\Models\Admin;
use Tests\TestCase;

class PengumumanAsramaAccessTest extends TestCase
{
    public function test_only_super_admin_and_admin_asrama_can_access_asrama_features(): void
    {
        $superAdmin = new Admin(['role' => Admin::ROLE_SUPER_ADMIN]);
        $adminAsrama = new Admin(['role' => Admin::ROLE_ADMIN_ASRAMA]);
        $adminSekolah = new Admin(['role' => Admin::ROLE_ADMIN_SEKOLAH]);

        $this->assertTrue($superAdmin->canAccessAsrama());
        $this->assertTrue($adminAsrama->canAccessAsrama());
        $this->assertFalse($adminSekolah->canAccessAsrama());
    }

    public function test_pengumuman_asrama_admin_routes_use_asrama_role_middleware(): void
    {
        $routeNames = [
            'admin.pengumuman-asrama.index',
            'admin.pengumuman-asrama.create',
            'admin.pengumuman-asrama.store',
            'admin.pengumuman-asrama.edit',
            'admin.pengumuman-asrama.update',
            'admin.pengumuman-asrama.destroy',
        ];

        foreach ($routeNames as $routeName) {
            $route = app('router')->getRoutes()->getByName($routeName);

            $this->assertNotNull($route);
            $this->assertContains('admin.role:super_admin,admin_asrama', $route->gatherMiddleware());
        }
    }
}
