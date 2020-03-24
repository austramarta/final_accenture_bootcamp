<?php
class InfoController
{
    public function aboutUs()
    {
        return BaseView::generate('Info', 'aboutUs');
    }
}