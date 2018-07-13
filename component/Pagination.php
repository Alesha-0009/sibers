<?php

class Pagination
{
    private $user;
    private $results_per_page = 6;
    private $number_of_results;
    private $number_of_pages;

    public function __construct()
    {
        $this->user = new User;
        $this->number_of_results = (int)$this->user->getCountRows();
        $this->number_of_pages = ceil($this->number_of_results / $this->results_per_page);
    }

    public function paginate()
    {
        for ($page = 1; $page <= $this->number_of_pages;$page++)
        {
            echo '<a class="ml-3" href="/home/users/' .$page. '">' . $page . '</a>';
        }
    }

}