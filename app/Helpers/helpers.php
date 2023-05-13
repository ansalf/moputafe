<?php

/**
 * setActive
 *
 * Returns the "active" class if the current request path matches the given path.
 *
 * @param  string $path
 * @return string
 */
function setActive(string $path): string
{
    return Request::is($path . '*') ? 'active' : '';
}

/**
 * TanggalID
 *
 * Converts a date string into an Indonesian formatted date string.
 *
 * @param  string $tanggal
 * @return string
 */
function TanggalID(string $tanggal): string
{
    $carbon = Carbon\Carbon::parse($tanggal)->locale('id');
    return $carbon->translatedFormat('l, d F Y');
}

