<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UIController extends Controller
{
    public function Main()
    {
        /*
        $host = $_SERVER['HTTP_HOST'];
        if (explode(".", $host)[0 == "kofun"] || explode(".", $host)[0 == "diving"])
        {
            $this->Kofun();
        }else{
            $this->Home();
        }
        */
    }
    public function Home()
    {
        return redirect('https://kofun.jaa.is/');
    }
    public function Kofun($page = null)
    {
        if($page == null){
            $page = "root";
        }
        if($page == "excel_test")
        {
            return view("kofun.excel_test");
        }
        if($page == "gallery_test")
        {
            return view("kofun.fb_gallery_test");
        }
        if($page == "in_dev")
        {
            return view("kofun.newhome");
        }
        return view("kofun.home", ["page" => $page]);

        /* Old temp view
        return view("temporary_dive");
        */
    }
    public function Dev($page = null)
    {
        return view("kofun.fb_gallery_test");
        /* Old dev
        if($page == null){
            $page = "root";
        }
        return view("kofun.home", ["page" => $page]);
        */
    }
}