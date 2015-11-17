<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
<pre class="real-pre small">
<b>
List:       <a href="?l=php-general&r=1&w=2">php-general</a>
Subject:    <a href="?t=90587033400002&r=1&w=2">Re: [PHP3] how to escape &lt;INPUT TYPE=TEXT VALUES... (slightly offtopic)</a>
From:       <a href="?a=90366482800004&r=1&w=2">Rasmus Lerdorf &lt;rasmus () lerdorf ! on ! ca&gt;</a>
Date:       <a href="?l=php-general&r=1&w=2&b=199809">1998-09-15 16:07:47</a>
</b>

&gt; i do not know how to do escaping so i can enter (INCLUDING the "
&gt; characters)
&gt;
&gt; "it's time" ---- and get ----- "it's time"
&gt; or
&gt; 'i love "dogs"' and get 'i love "dogs"'
&gt;
&gt; i can either try ..VALUE='&lt;?php echo $hallo; ?&gt;'
&gt; or VALUE="&lt;?php echo $hallo; ?&gt;"
&gt;
&gt; but anyway that's not as flexible as i want to be....

You should always have quotes around your value element unless you
are absolutely sure it is only a single word.  And you should probably
have a look at the url_encode() function.

-Rasmus
</pre>
    </div>
</section>