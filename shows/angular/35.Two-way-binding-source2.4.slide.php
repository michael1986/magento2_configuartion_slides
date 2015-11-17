<section class="slide full-page" id="Two-way-binding-source2.4">
    <div>
        <h2>Two-way binding example <sup>(pro)<sup>(still so dummy)</sup></sup></h2>
        <div class="example-source"
             data-ng-controller="example2Controller">
            <?php include 'examples/example2.3.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65" data-ng-non-bindable>
                <pre class="code no-margin">
                <?php
                echo code('
<input type="text" data-ng-model="query" />
<!-- ... -->
<ul><li data-ng-repeat="contact in contacts | filter:query">
    <small>{{ contact | contactInfo }}</small>
</li></ul>
', 'html', false);
                ?>
                </pre>
                <hr>
                <?php
                echo code('
angular.module("angulardemo")
    .controller("example2Controller", function($scope) {/* ... */});
    .filter("contactInfo", function() {
        return function(input) {
            var name = input.firstName && input.lastName
                ? input.firstName + " " + input.lastName : null;
            return input.email
                ? (name ? name + " <" + input.email + ">" : input.email) : name;
        }
    });
',
                    'javascript');
                ?>
            </div>
        </div>
    </div>
</section>