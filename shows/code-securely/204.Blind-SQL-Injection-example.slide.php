<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Blind SQL Injection</h2>

        <div class="small">
            <pre class="code">
                <code class="html">http://newspaper.com/items.php?id=2</code>
            </pre>
            <pre class="code">
                <code class="sql">SELECT title, description, body FROM items WHERE ID = 2</code>
            </pre>

            <div class="next">
                <pre class="code">
                    <code class="html">http://newspaper.com/items.php?id=<span class="injected">2 and 1=2</span></code>
                </pre>
                <pre class="code">
                    <code class="sql">SELECT title, description, body FROM items WHERE ID = <span class="injected">2 and 1=2</span></code>
                </pre>
            </div>
        </div>
    </div>
</section>