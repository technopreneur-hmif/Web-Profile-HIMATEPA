<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ArticleController extends Controller
{
    public function index()
    {
        $artikels = collect([
            [
                'title' => 'HIMATEPA Goes To School',
                'division' => 'Divisi Pubdok',
                'date' => '24 Oktober 2024',
                'excerpt' => 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Ut Et Massa Mi.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'HIMATEPA Workshop',
                'division' => 'Divisi Pendidikan',
                'date' => '20 Oktober 2024',
                'excerpt' => 'Aliquam In Hendrerit Urna Pellentesque Sit Amet Sapien Fringilla.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
            [
                'title' => 'Seminar HIMATEPA',
                'division' => 'Divisi Pengembangan',
                'date' => '15 Oktober 2024',
                'excerpt' => 'Ut Et Massa Mi Aliquam In Hendrerit Urna Pellentesque Sit Amet.',
                'image' => '/images/heroimagedashboard.jpg',
            ],
        ]);

        $perPage = 6; // Items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $artikels->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginatedArticles = new LengthAwarePaginator(
            $currentItems,
            $artikels->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        return view('artikel', ['artikels' => $paginatedArticles]);
    }
}
