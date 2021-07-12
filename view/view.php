<?php
namespace FancyWebsite\view;

class View {
    private $viewfile;


    private $properties = array();

    public function __construct($viewfile)
    {
        $this->viewfile = "./../$viewfile.php";
    }

    public function __set($key, $value)
    {
        if (!isset($this->$key)) {
            $this->properties[$key] = $value;
        }
    }

    public function __get($key)
    {
        if (isset($this->properties[$key])) {
            return $this->properties[$key];
        }
    }

    public function display()
    {
        extract($this->properties);

        require './../common/header.php';
        require $this->viewfile;
        require './../common/footer.php';
    }

}