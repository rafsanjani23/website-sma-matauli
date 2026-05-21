<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    public function index()
    {
        $items = Admin::whereIn('role', Admin::ASSIGNABLE_ROLES)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.admin-users.index', compact('items'));
    }

    public function create()
    {
        return view('admin.admin-users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'min:4', 'max:50', 'alpha_dash', 'unique:admins,username'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', Rule::in(Admin::ASSIGNABLE_ROLES)],
        ]);

        Admin::create([
            'username' => $validated['username'],
            'password' => $validated['password'],
            'role' => $validated['role'],
        ]);

        return redirect()->route('admin.admin-users.index')->with('success', 'Admin baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Admin::findOrFail($id);

        if (! in_array($item->role, Admin::ASSIGNABLE_ROLES, true)) {
            abort(403, 'Tidak dapat mengubah akun super admin.');
        }

        return view('admin.admin-users.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Admin::findOrFail($id);

        if (! in_array($item->role, Admin::ASSIGNABLE_ROLES, true)) {
            abort(403, 'Tidak dapat mengubah akun super admin.');
        }

        $validated = $request->validate([
            'username' => ['required', 'string', 'min:4', 'max:50', 'alpha_dash', Rule::unique('admins', 'username')->ignore($item->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'role' => ['required', Rule::in(Admin::ASSIGNABLE_ROLES)],
        ]);

        $item->username = $validated['username'];
        $item->role = $validated['role'];

        if (! empty($validated['password'])) {
            $item->password = $validated['password'];
        }

        $item->save();

        return redirect()->route('admin.admin-users.index')->with('success', 'Data admin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Admin::findOrFail($id);

        if ($item->id === Auth::guard('admin')->id()) {
            abort(403, 'Tidak dapat menghapus akun Anda sendiri.');
        }

        if (! in_array($item->role, Admin::ASSIGNABLE_ROLES, true)) {
            abort(403, 'Tidak dapat menghapus akun super admin.');
        }

        $item->delete();

        return redirect()->route('admin.admin-users.index')->with('success', 'Admin berhasil dihapus.');
    }
}
