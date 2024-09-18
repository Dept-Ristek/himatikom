<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarApp extends Component
{
    /**
     * Create a new component instance.
     */
    protected $sidebar_menus;


    public function __construct()
    {
        $this->sidebar_menus = [
            [
                'name' => 'Dashboard',
                'icon' => '<i class="bi bi-speedometer2"></i>',
                'url' => 'dashboard',
                'slug_name' => 'dashboard',
                'access' => ['admin', 'pengurus'],
                'children' => null
            ],
            [
                'name' => 'User',
                'icon' => '<i class="bi bi-person-lines-fill"></i>',
                'url' => 'user.user-pengurus',
                'slug_name' => 'user',
                'access' => ['admin', 'pengurus'],
                'children' => [
                    [
                        'name' => 'Pengurus',
                        'url' => 'user.user-pengurus',
                        'slug_name' => 'user-pengurus',
                    ],
                    [
                        'name' => 'Anggota',
                        'url' => 'user.user-anggota',
                        'slug_name' => 'user-anggota',
                    ],
                    [
                        'name' => 'Import Data',
                        'url' => 'user.import',
                        'slug_name' => 'user-import',
                    ]
                ]
            ],
            [
                'name' => 'Halaman Artikel',
                'icon' => '<i class="bi bi-newspaper"></i>',
                'url' => 'halaman-artikel',
                'slug_name' => 'halaman-artikel',
                'access' => ['admin', 'pengurus'],
            ],            
            [
                'name' => 'Proker Agenda',
                'icon' => '<i class="bi bi-journal-bookmark-fill"></i>',
                'url' => 'proker-agenda.proker',
                'slug_name' => 'proker-agenda',
                'access' => ['admin', 'pengurus'],
                'children' => [
                    [
                        'name' => 'Program Kerja',
                        'url' => 'proker-agenda.proker',
                        'slug_name' => 'program-kerja',
                    ],
                    [
                        'name' => 'Agenda',
                        'url' => 'proker-agenda.agenda',
                        'slug_name' => 'agenda',
                    ],
                    // [
                    //     'name' => 'Penulisan Berita',
                    //     'url' => 'proker-agenda.berita',
                    //     'slug_name' => 'berita',
                    // ],
                ]
            ],
            [
                'name' => 'Arsip',
                'icon' => '<i class="bi bi-file-zip"></i>',
                'url' => 'archive.index',
                'slug_name' => 'arsip-data',
                'access' => ['admin', 'pengurus'],
                'children' => [
                    [
                        'name' => 'Kelola Arsip Surat',
                        'url' => 'archive.index',
                        'slug_name' => 'arsip-surat-masuk'
                    ],
                    [
                        'name' => 'Surat Masuk',
                        'url' => 'archive.inbox',
                        'slug_name' => 'surat-masuk'
                    ],
                    [
                        'name' => 'Surat Keluar',
                        'url' => 'archive.outbox',
                        'slug_name' => 'arsip-surat-keluar'
                    ],
                    [
                        'name' => 'Sertifikat',
                        'url' => 'archive.sertifikat',
                        'slug_name' => 'arsip-sertifikat'
                    ],
                    [
                        'name' => 'Proposal',
                        'url' => 'archive.proposal',
                        'slug_name' => 'arsip-proposal'
                    ],
                ]
            ],
            [
                'name' => 'Profile',
                'icon' => '<i class="bi bi-person-circle"></i>',
                'url' => 'profile',
                'slug_name' => 'profile',
                'access' => ['admin', 'pengurus', 'anggota'],
                'children' => [
                    [
                        'name' => 'Kelola Akun',
                        'url' => 'profile',
                        'slug_name' => 'kelola-akun',
                    ],
                    [
                        'name' => 'Absensi',
                        'url' => 'absensi',
                        'slug_name' => 'absensi',
                    ],
                ]
            ],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.partials._sidebar-app', [
            'sidebar_menus' => $this->sidebar_menus
        ]);
    }
}
