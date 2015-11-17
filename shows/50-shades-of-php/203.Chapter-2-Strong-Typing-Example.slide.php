<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('python','
# Python
>>> foo = "10"
>>> print foo - 5
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
TypeError: unsupported operand type(s) for -:
                                    \'str\' and \'int\''
        ) ?>
    </div>
</section>