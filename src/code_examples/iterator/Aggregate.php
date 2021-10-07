<?php

interface Aggregate
{
    public function getIterator(): Iterator;
}