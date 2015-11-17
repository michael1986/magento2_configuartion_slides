<section class="slide full-page" id="Two-way-binding-source2.1">
    <div>
        <h2>Two-way binding example <sup>(pro)<sup>(still so dummy)</sup></sup></h2>
        <div class="example-source"
             data-ng-controller="example2Controller">
            <?php include 'examples/example2.1.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65" data-ng-non-bindable>
                <?php echo code('
<div data-ng-controller="example2Controller">
    <div>
        <label>Add contact:<br>
            <input type="text" data-ng-model="newContact" />
        </label>
        <button data-ng-click="addContact(newContact)">add</button>
        <div data-ng-show="displayHelp">
            <small>Format is wrong</small>
        </div>
    </div>
    <div>
        All contacts:<br><small>{{ contacts | json }}</small>
    </div>
    <!-- ... -->
</div>
',
                    'html');
                ?>
            </div>
        </div>
    </div>
</section>