<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/27/2018
 * Time: 10:30 AM
 */

class HomeController extends Controller
{
    public function index(){
        $model = $this->model('Page');
        $model->title = 'Home';
        $model->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla sem 
        eu velit eleifend, sit amet placerat metus porttitor. Ut gravida placerat auctor. Aenean 
        feugiat metus nec orci pharetra, vitae interdum urna blandit. Ut nec pellentesque est, sit amet
        sollicitudin nisi. Vestibulum non convallis elit, non lobortis nulla. Proin in dolor vehicula,
        laoreet enim sit amet, vestibulum libero. Nulla euismod, sem sed molestie mattis, justo elit elementum lectus, vel posuere enim arcu ut nunc. In tristique placerat erat, id laoreet massa. Morbi at nulla ut elit porttitor euismod elementum in neque. Donec eget augue in nisi fringilla maximus in ac tellus. Curabitur ornare sem sit amet massa dignissim sagittis. Maecenas condimentum lacus sed metus dignissim tempus. Mauris interdum erat et mi pellentesque, in pellentesque nulla euismod. Nam lobortis accumsan neque, et ultrices libero sollicitudin vel. Duis commodo nibh risus, at consectetur nibh scelerisque luctus.
        In eget faucibus mauris. Nulla velit lacus, pretium ut molestie nec, tincidunt id enim. Integer
        lobortis eu metus eget interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam a ligula augue. Suspendisse finibus nulla sed lectus commodo, non sagittis magna accumsan. Nunc condimentum tellus tellus, non volutpat mi viverra nec. Phasellus eu ipsum turpis. Donec id nisl nibh. Suspendisse cursus augue id erat sodales finibus.
        suere nulla eget, fringilla magna.';
        $this->view('home/index', $model);
    }
    public function about($name = ''){
        $model = $this->model('Page');
        $model->title = 'about';
        $this->view('home/about', $model);
    }
    public function contact($name = ''){
        $model = $this->model('Page');
        $model->title = 'contact';
        $this->view('home/contact', $model);
    }
}