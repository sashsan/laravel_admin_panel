<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 29.05.2019
     * Time: 21:40
     */

    namespace App\Providers;


    use Illuminate\Support\ServiceProvider;
    use App;
    use Blade;

    class WidgetServiceProvider extends ServiceProvider
    {

        public function boot()
        {
            /*
             * Регистрируется дирректива для шаблонизатора Blade
             * Пример обращаения к виджету: @widget('menu')
             * Можно передать параметры в виджет:
             * @widget('menu', [$data1,$data2...])
             */
            Blade::directive('widget', function ($name) {
                return "<?php echo app('widget')->show($name); ?>";
            });
            /*
             * Регистрируется (добавляем) каталог для хранения шаблонов виджетов
             * app\Widgets\view
             */
            $this->loadViewsFrom(app_path() .'/Widgets/view', 'Widgets');
        }

        public function register()
        {
            App::singleton('widget', function(){
                return new \App\Widgets\Widget();
            });
        }

    }
