<?php
function first(string $text): void
{
    echo ($text);
}
first('param3t3r');
function repeatcontent(int $count = 1): void
{
    for ( $i =0; $i <= $count; $i++){
        first("hi");
    }
}
repeatcontent();
repeatcontent(5);