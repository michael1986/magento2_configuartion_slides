hljs.initHighlightingOnLoad();

angular.module("angulardemo", [])

    .controller("example1Controller", function() {})

    .controller("example2Controller", function($scope) {
        $scope.contacts = [];
        $scope.$watch("newContact", function(newValue, oldValue) {
            if (!newValue) {
                $scope.displayHelp = false;
            }
        });
        $scope.addContact = function(newContact)
        {
            var contact = parseContact(newContact);
            if (!contact) {
                $scope.displayHelp = true;
                return;
            }

            $scope.contacts.push(contact);
            $scope.newContact = "";
            $scope.displayHelp = false;
        };

        function parseContact(input)
        {
            input = input.trim();
            var emailRegExp = /^[\w\d\.\-_]+@[\w\d\.\-_]+\.[\w\d\.\-_]+$/;
            var nameRegExp = /^([\w\d\.\-_]+)\s([\w\d\.\-_]+)$/;
            var fullRegExp = /^([\w\d\.\-_]+)\s([\w\d\.\-_]+)\s<([\w\d\.\-_]+@[\w\d\.\-_]+\.[\w\d\.\-_]+)>$/;
            var result;

            var contact = {};
            if (emailRegExp.test(input)) {
                contact.email = input;
            } else if (nameRegExp.test(input)) {
                result = nameRegExp.exec(input);
                contact.firstName = result[1];
                contact.lastName = result[2];
            } else if (fullRegExp.test(input)) {
                result = fullRegExp.exec(input);
                contact.firstName = result[1];
                contact.lastName = result[2];
                contact.email = result[3];
            } else {
                return null;
            }
            return contact;
        }
    })

    .controller("example3Controller", function($scope, ExchangeRateDummy) {
        $scope.convert = function(amount, from, to) {
            var rate = ExchangeRateDummy.getRate(from, to);
            return (parseFloat(amount) || 0) * (rate.rate || 0);
        }
    })

    .controller("example4Controller", function($scope, ExchangeRate) {
        $scope.converted = {"USD": 0, "EUR": 0, "GBP": 0};
        $scope.$watch("amount", function(amount) {
            angular.forEach($scope.converted, function(convertedValue, currency) {
                ExchangeRate.getRate("UAH", currency).then(function(response) {
                    $scope.converted[currency] = (parseFloat(amount) || 0)
                        * (response.data.rate || 0);
                });
            });
        });
    })

    .factory("ExchangeRateDummy", function() {
        var rates = {
            "UAHUSD": { from: "UAH", to: "USD", rate: 0.06 },
            "UAHEUR": { from: "UAH", to: "EUR", rate: 0.05 },
            "UAHGBP": { from: "UAH", to: "GBP", rate: 0.04 }
        };
        return {
            getRate: function(from, to) {
                return (from + to in rates) ? rates[from + to] : {};
            }
        }
    })
    .factory("ExchangeRate", ["$http", function($http) {
        var apiUrl = "http://jsonrates.com/get/";
        var apiKey = "jr-1c7042ea799d59b6daa30515862ec36c";
        return {
            getRate: function(from, to) {
                return $http.jsonp(apiUrl + "?from=" + from + "&to=" + to + "&apiKey=" + apiKey
                    + "&callback=JSON_CALLBACK", {cache: true});
            }
        }
    }])
    .filter("contactInfo", function() {
        return function(input) {
            var name = input.firstName && input.lastName
                ? input.firstName + " " + input.lastName
                : null;

            return input.email
                ? (name ? name + " <" + input.email + ">" : input.email)
                : name;
        }
    });
