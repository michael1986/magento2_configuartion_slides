<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>LDAP Injection Protection</h2>

        <ul>
            <li>Escape user input:
                <ul>
                    <li>&, !, |, =, <, >, ,, +, -, ", ', ; used in DN - Requires \ escape</li>
                    <li>(, ), \, *, /, NUL used in Filter - Requires {\ASCII} escape</li>
                </ul>
            </li>
        </ul>
    </div>
</section>