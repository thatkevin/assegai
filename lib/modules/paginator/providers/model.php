<?php

/**
 * @package assegai.modules.paginator
 *
 * Model provider for the paginator.
 */
class PaginatorModelProvider implements IPaginatorProvider
{
    protected $data;

    public function __construct(IPaginatorModel $data)
    {
        $this->data = $data;
    }

    public function count()
    {
        return $this->data->count();
    }

    public function getPage($pagenum, $pagelength)
    {
        return $this->data->getItems($pagenum * $pagelength, $pagelength);
    }
}
