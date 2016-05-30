<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>ReDoS: Evil Regexes</h2>

        <div class="small">
            <p class="no-margin-bottom">
                A Regex is called "evil" if it can stuck on crafted input.<br/>
                Evil Regex pattern contains:
            </p>
            <ul class="margin-left">
                <li>Grouping with repetition</li>
                <li>Inside the repeated group:
                    <ul>
                        <li>Repetition</li>
                        <li>Alternation with overlapping</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>