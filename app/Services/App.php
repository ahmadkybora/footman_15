<?php

namespace App\Services;

// use App\Http\Controllers\Controller;

class App
{
    // یک آبجکت از نوع کلاس
    public Router $router;
    public Request $request;
    public Response $response;
    // یک آبجکت استاتیک از نوع کلاس
    public static App $app;
    // public ?Controller $controller = null;

    public function __construct()
    {
        // بوسیله روش زیر میتوان با پراپرتی اپ
        // به پراپرتی و دیگر متد های این کلاس دسترسی داشت
        //  بوسیله ریختن مقدار 
        //  $this
        //  داخل متغییر زیر
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        $this->router->resolve();
    }

    // public function getController(): Controller
    // {
    //     return $this->controller;
    // }

    // public function setController(Controller $controller): void
    // {
    //     $this->controller = $controller;
    // }
}