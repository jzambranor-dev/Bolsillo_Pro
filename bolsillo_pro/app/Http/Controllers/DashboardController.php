<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Módulo por defecto
        return view('dashboard', [
            'moduleComponent' => 'components.modules.index'
        ]);
    }

    public function loadModule($module)
    {
        $moduleMap = [
            'index'        => 'components.modules.index',
            'get-users'  => 'components.modules.users.get-users',
            'create-user'  => 'components.modules.users.create-user',
            'edit-user'    => 'components.modules.users.edit-user',
            'reportes'     => 'components.modules.reports.index',
            // Agrega más módulos aquí si deseas
        ];

        $component = $moduleMap[$module] ?? 'components.modules.404';

        return view($component);
    }
}
