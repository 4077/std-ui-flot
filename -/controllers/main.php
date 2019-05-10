<?php namespace std\ui\flot\controllers;

class Main extends \Controller
{
    public function reload()
    {
        $this->jquery('|')->replace($this->view());
    }

    public function view()
    {
        $v = $this->v('|');

        $v->assign([
                       'WIDTH'  => $this->data('width') ?? 1200,
                       'HEIGHT' => $this->data('height') ?? 600
                   ]);

        $this->css();

        $this->js('source/jquery.canvaswrapper');
        $this->js('source/jquery.colorhelpers');
        $this->js('source/jquery.flot');

        $plugins = $this->getDefaultPlugins();
        merge($plugins, l2a($this->data('plugins')));

        foreach ($plugins as $plugin) {
            $this->js('source/jquery.flot.' . $plugin);
        }

        $this->widget(':|', [
            'data'    => $this->data('data'),
            'options' => $this->data('options')
        ]);

        return $v;
    }

    private function getDefaultPlugins()
    {
        return [
            'saturated',
            'browser',
            'drawSeries',
            'errorbars',
            'uiConstants',
            'logaxis',
            'symbol',
            'flatdata',
            'navigate',
            'fillbetween',
            'stack',
            'touchNavigate',
            'hover',
            'touch',
            'time',
            'axislabels',
            'selection',
            'composeImages',
            'legend'
        ];
    }
}
