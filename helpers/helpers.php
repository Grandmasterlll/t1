<?php

function app(): \Framework4iper\Application
{
    return \Framework4iper\Application::$app;
}

function request(): \Framework4iper\Request
{
    return app()->request;
}