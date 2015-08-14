<?php

if ( ! function_exists('pr'))
{
    /**
     * Generate print_r for debug
     *
     * @param  string/array/object  $value
     */
    function pr($value)
    {
        if (env('APP_DEBUG', false) == false) return;
        echo('<pre>');
        print_r($value);
        echo('</pre>');
    }
}

if ( ! function_exists('vd'))
{
    /**
     * Generate var_dump for debug
     *
     * @param  string/array/object  $value
     */
    function vd($value)
    {
        if (env('APP_DEBUG', false) == false) return;
        echo('<pre>');
        var_dump($value);
        echo('</pre>');
    }
}

if ( ! function_exists('value2key'))
{
    /**
     * Generate var_dump for debug
     *
     * @param  array  $datas
     * @return array
     */
    function value2key($datas)
    {
        $result = false;
        if (is_array($datas)) {
            foreach ($datas as $data) {
                $result[$data] = $data;
            }
        }
        return $result;
    }
}

if ( ! function_exists('low'))
{
    /**
     * Change to lower
     *
     * @param  string  $text
     * @return string
     */
    function low($text)
    {
        return strtolower($text);
    }
}

if ( ! function_exists('upp'))
{
    /**
     * Change to upper
     *
     * @param  string  $text
     * @return string
     */
    function upp($text)
    {
        return strtoupper($text);
    }
}

if ( ! function_exists('ucf'))
{
    /**
     * Change to upper only first chara
     *
     * @param  string  $text
     * @return string
     */
    function ucf($text)
    {
        return ucfirst($text);
    }
}

if ( ! function_exists('link_to'))
{
    /**
     * Generate a HTML link.
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $secure
     * @return string
     */
    function link_to($url, $title = null, $attributes = array(), $secure = null)
    {
        return app('html')->link($url, $title, $attributes, $secure);
    }
}

if ( ! function_exists('link_to_asset'))
{
    /**
     * Generate a HTML link to an asset.
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $secure
     * @return string
     */
    function link_to_asset($url, $title = null, $attributes = array(), $secure = null)
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if ( ! function_exists('link_to_route'))
{
    /**
     * Generate a HTML link to a named route.
     *
     * @param  string  $name
     * @param  string  $title
     * @param  array   $parameters
     * @param  array   $attributes
     * @return string
     */
    function link_to_route($name, $title = null, $parameters = array(), $attributes = array())
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if ( ! function_exists('link_to_action'))
{
    /**
     * Generate a HTML link to a controller action.
     *
     * @param  string  $action
     * @param  string  $title
     * @param  array   $parameters
     * @param  array   $attributes
     * @return string
     */
    function link_to_action($action, $title = null, $parameters = array(), $attributes = array())
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}

if (!function_exists('option_add')) {
    /**
     * Add option to the array .
     *
     * @param  array   $options
     * @param  string  $key
     * @param  string  $value
     * @return array   $options
     */
    function option_add(array $options = array(), $key = null, $value = null, $separator = ' ', $postion = 'front')
    {
        if (array_key_exists($key, $options) == false)
        {
            $options[$key] = $value;
        }
        elseif ($postion == 'front')
        {
            $options[$key] = $value . $separator . $options[$key];
        }
        else
        {
            $options[$key] =  $options[$key] . $separator . $value;
        }
        return $options;
    }
}

if (!function_exists('icon')) {
    /**
     * Return the given icon.
     *
     * @param  string $type
     * @return mixed
     */
    function icon($type)
    {
        return app('html')->icon($type);
    }
}
