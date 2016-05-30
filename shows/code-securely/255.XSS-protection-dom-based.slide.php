<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>DOM Based XSS Protection</h2>

        <ol class="small">
            <li>HTML Escape then JavaScript Escape Before Inserting Untrusted Data into HTML Subcontext *</li>
            <li>JavaScript Escape Before Inserting Untrusted Data into HTML Attribute Subcontext *</li>
            <li>Be Careful when Inserting Untrusted Data into the Event Handler and JavaScript code Subcontexts *</li>
            <li>JavaScript Escape Before Inserting Untrusted Data into the CSS Attribute Subcontext *</li>
            <li>URL Escape then JavaScript Escape Before Inserting Untrusted Data into URL Attribute Subcontext *</li>
            <li>Populate the DOM using safe JavaScript functions or properties</li>
        </ol>
        <p class="small">* — within the Execution Context</p>
    </div>
</section>