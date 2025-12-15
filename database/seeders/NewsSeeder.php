<?php

namespace Database\Seeders;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 1000; $i++) {
            News::create([
                'foto1' => 'news/foto1_' . rand(1, 10) . '.jpg',
                'foto2' => 'news/foto2_' . rand(1, 10) . '.jpg',
                'foto3' => 'news/foto3_' . rand(1, 10) . '.jpg',
                'title' => 'Judul Berita Ke-' . $i,
                'content' => $this->generateContent(),
                'published_at' => Carbon::now()->subDays(rand(0, 365)),
            ]);
        }
    }

    private function generateContent(): string
    {
        return implode("\n\n", [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'Berita ini disusun sebagai informasi kegiatan dan perkembangan terbaru yang terjadi di lingkungan sekolah.'
        ]);
    }
}
