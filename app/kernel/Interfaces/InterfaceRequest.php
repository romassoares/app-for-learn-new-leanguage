<?php

namespace app\kernel\Interfaces;

interface InterfaceRequest
{
    function actived(): bool;
    function rules($request): array;
}
