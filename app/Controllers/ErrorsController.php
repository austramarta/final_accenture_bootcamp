<?php
class ErrorsController
{
    public function error()
    {
        return BaseView::generate('Errors', 'index');
    }
}