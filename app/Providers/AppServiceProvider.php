<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        $this->app->make('config')->set(
            'filesystems.disks.public.url',
            url('/storage')
        );

        // Share site settings with all views
        view()->composer('*', function ($view) {
            $settings = null;
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                    $settings = \App\Models\Setting::first();
                }
            } catch (\Exception $e) {
                // Ignore DB exceptions during migrations
            }

            $view->with('siteSettings', $settings ?? new \App\Models\Setting([
                'whatsapp' => '6285293756658',
                'whatsapp_formatted' => '+62 852-9375-6658',
                'address' => 'Gedongrejo RT02/RW14, Kaliwuluh, Kebakkramat, Karanganyar, Jawa Tengah 57762',
                'jam_operasional_weekday' => 'Senin - Sabtu: 07.00 - 21.00',
                'jam_operasional_weekend' => 'Minggu: 08.00 - 17.00',
            ]));
        });
    }
}
