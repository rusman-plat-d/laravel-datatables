<?php

namespace App\Http\Controllers;

use App\DataTables\Sys\RoleDataTable;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(
        UsersDataTable $usersDataTable,
        RoleDataTable $roleDataTable
    ) {
        return view(
            'users.index',
            compact(
                'usersDataTable',
                'roleDataTable'
            )
        );
    }

    public function role(RoleDataTable $roleDataTable)
    {
        return $roleDataTable->ajax();
    }

    public function user(UsersDataTable $usersDataTable)
    {
        return $usersDataTable->ajax();
    }
}
