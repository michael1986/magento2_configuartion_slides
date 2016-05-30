<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>XSS Protection</h2>

        <ol class="small">
            <li>Never Insert Untrusted Data Except in Allowed Locations</li>
            <li>HTML Escape Before Inserting Untrusted Data into HTML Element Content</li>
            <li>Attribute Escape Before Inserting Untrusted Data into HTML Common Attributes</li>
            <li>JavaScript Escape Before Inserting Untrusted Data into JavaScript Data Values</li>
            <li>HTML escape JSON values in an HTML context and read the data with JSON.parse</li>
            <li>CSS Escape And Strictly Validate Before Inserting Untrusted Data into HTML Style Property Values</li>
            <li>URL Escape Before Inserting Untrusted Data into HTML URL Parameter Values</li>
            <li>Sanitize HTML Markup with a Library Designed for the Job</li>
            <li>Prevent DOM-based XSS</li>
        </ol>
    </div>
</section>