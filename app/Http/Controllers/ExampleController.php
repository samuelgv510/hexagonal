<?php

interface Response
{
    public function JsonResponse(): string;
    public function HtmlResponse(): string;
    
}

interface BinaryResponse
{
    public function BinaryResponse();
}

final class apiResponse implements Response
{
    public function JsonResponse(): string
    {
        return json_encode("hello world",true);
    }
    public function HtmlResponse(): string
    {
        return '<b>Hello world</b>';
    }
}
final class fileResponse implements BinaryResponse
{
    public function BinaryResponse()
    {
        return true;
    }
}