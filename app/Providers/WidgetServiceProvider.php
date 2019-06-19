<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 29.05.2019
     * Time: 21:40
     */

    namespace App\Providers;


    use Illuminate\Support\ServiceProvider;
    use BlogApp;
    use Blade;

    class WidgetServiceProvider extends ServiceProvider
    {

        public function boot()
        {

            Blade::directive('widget', function ($name) {
                return "<?php echo app('widget')->show($name); ?>";
            });

            $this->loadViewsFrom(app_path() .'/Widgets/view', 'Widgets');
        }

        public function register()
        {
            BlogApp::singleton('widget', function(){
                return new \App\Widgets\Widget();
            });
        }

    }
