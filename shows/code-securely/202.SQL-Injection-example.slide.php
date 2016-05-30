<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>SQL Injection</h2>
        <p>
            <strong>Username:</strong> Mike<br>
            <strong>Password:</strong> ' OR '' = '
        </p>
        <div class="small">
            <pre class="code">
                <code class="sql">SELECT * FROM Users WHERE username = 'Mike' AND password = '<span class="injected">' OR '' = '</span>';</code>
            </pre>
        </div>

    </div>
</section>