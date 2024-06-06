<?php

namespace App\Components;

use App\Component\SearchQueryInterface;
Class SearchQueryBuilder 
{
    protected $search;

    public function __construct(SearchQueryInterface $searchQuery)
    {
        $this->search = $searchQuery;
    }

    public function search(array $search): array
    {
        $this->buildQuery();
        $data = $this->pagination();
        return $this->search->prepareCollection($data);
    }

    protected function buildQuery()
    {
        $this->query = $this->search->query();
    }

    protected function pagination()
    {
        if (request()->has('per_page')) {
            $perpage = request()->per_page;
            if($perpage == 0){
                 // return $this->query->get();
                 $rows = collect();
                 $this->query->chunk(500, function ($collections) use ($rows) {
                      foreach($collections as $collection)
                           $rows->push($collection);
                      });
                 return $rows;
            }
            return $this->query->paginate($perpage);
       } else {
            return $this->query->paginate();
       }
    }
}
