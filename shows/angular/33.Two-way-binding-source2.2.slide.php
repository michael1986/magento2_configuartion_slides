<section class="slide full-page" id="Two-way-binding-source2.2">
    <div>
        <h2>Two-way binding example <sup>(pro)<sup>(still so dummy)</sup></sup></h2>
        <div class="example-source"
             data-ng-controller="example2Controller">
            <?php include 'examples/example2.1.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65" data-ng-non-bindable>
                <?php echo code('
angular.module("angulardemo")
    .controller("example2Controller", function($scope) {
        $scope.contacts = [];
        $scope.addContact = function(newContact) {
            var contact = parseContact(newContact);
            if (!contact) {
                $scope.displayHelp = true;
                return;
            }
            $scope.contacts.push(contact);
            $scope.newContact = "";
            $scope.displayHelp = false;
        };
        // ...
    });
',
                    'javascript');
                ?>
            </div>
        </div>
    </div>
</section>