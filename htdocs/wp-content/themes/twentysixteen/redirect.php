<?php

if (have_posts()) {
the_post();
$pattern = ‘@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@’;
preg_match($pattern, get_the_excerpt(), $matches);
if ($matches[0]) header(‘Location: ‘.$matches[0]);
else echo ‘Enter a URL into your page body text.’;
}
?>