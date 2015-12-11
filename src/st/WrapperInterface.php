<?php
namespace st\Wrap;

interface WrapperInterface
{
    /**
     * Wraps data,
     * if some data is already wrapped,
     * replace it and return true.
     * false otherwise.
     * @param $data
     * @return mixed
     */
    public function wrap($data);

    /**
     * True if any data has been
     * wrapped at least once.
     * @return bool
     */
    public function hasData();

    /**
     * Return the inner data.
     * @return mixed
     */
    public function unwrap();
}