<?php

use Yoeunes\Toastr\Toastr;

if (! function_exists('toastr')) {
    /**
     * @param string $message
     * @param string $type
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastr(string $message = null, string $type = 'success', array $options = []): Toastr
    {
        if (is_null($message)) {
            return app('toastr');
        }

        return app('toastr')->addNotification($message, $type, $options);
    }
}

if (! function_exists('toastInfo')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastInfo(string $message = null, array $options = []): Toastr
    {
        return app('toastr')->addNotification($message, Toastr::INFO, $options);
    }
}

if (! function_exists('toastSuccess')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastSuccess(string $message = null, array $options = []): Toastr
    {
        return app('toastr')->addNotification($message, Toastr::SUCCESS, $options);
    }
}

if (! function_exists('toastWarning')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastWarning(string $message = null, array $options = []): Toastr
    {
        return app('toastr')->addNotification($message, Toastr::WARNING, $options);
    }
}

if (! function_exists('toastError')) {
    /**
     * @param string $message
     * @param string $title
     * @param array  $options
     *
     * @return Toastr
     */
    function toastError(string $message = null, array $options = []): Toastr
    {
        return app('toastr')->addNotification($message, Toastr::ERROR, $options);
    }
}

if (! function_exists('toastr_js')) {
    /**
     * @param string $version
     * @param string $src
     *
     * @return string
     */
    function toastr_js(string $version = '2.1.4', string $src = null): string
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.js';
        }

        return '<script type="text/javascript" src="'.$src.'"></script>';
    }
}

if (! function_exists('toastr_css')) {
    /**
     * @param string $version
     * @param string $href
     *
     * @return string
     */
    function toastr_css(string $version = '2.1.4', string $href = null): string
    {
        if (null === $href) {
            $href = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.css';
        }

        return '<link rel="stylesheet" type="text/css" href="'.$href.'">';
    }
}

if (! function_exists('jquery')) {
    /**
     * @param string $version
     * @param string $src
     *
     * @return string
     */
    function jquery(string $version = '3.3.1', string $src = null): string
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/'.$version.'/jquery.min.js';
        }

        return '<script type="text/javascript" src="'.$src.'"></script>';
    }
}
