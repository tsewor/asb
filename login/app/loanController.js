loanApp.controller('loanController', function ($scope, $location, loanService) {

    $scope.limits = {
        amount:
        {
            min: 550,
            max: 25000,
            step: 50
        },
        duration: {
            min: 6,
            max: 60,
            step: 1
        }
    };

    var a = parseInt($location.search()['a']) || $scope.limits.amount.min;
    var t = parseInt($location.search()['t']) || $scope.limits.duration.min;

    $scope.loan = {
        payment: 0,
        amount: a,
        duration: t,
        interestRate: 7,
        totalRepayment: 0,
        initialPayment: 0,
        finalPayment: 0,
        periodsInYear: 12,
        representativeApr: 0
    };

    $scope.$watch('loan.amount', function (newVal, oldVal) {
        newVal = parseInt(newVal);

        if (newVal >= $scope.limits.amount.min && newVal <= $scope.limits.amount.max) {
            $scope.loan.amount = parseInt(newVal);
            $scope.calculateLoan($scope.loan);
        }
    });

    $scope.$watch('loan.duration', function (newVal, oldVal) {
        newVal = parseInt(newVal);

        if (newVal >= $scope.limits.duration.min && newVal <= $scope.limits.duration.max) {
            $scope.loan.duration = newVal;
            $scope.calculateLoan($scope.loan);
        }
    });

    $scope.loan.$valid = function() {
        if ($scope.loan.duration < $scope.limits.duration.min) return false;
        if ($scope.loan.duration > $scope.limits.duration.max) return false;

        if ($scope.loan.amount < $scope.limits.amount.min) return false;
        if ($scope.loan.amount > $scope.limits.amount.max) return false;

        return true;
    };

    $scope.incrementDuration = function() {
        if (!$scope.loan.$valid()) {
            $scope.loan.duration = $scope.limits.duration.max;
        }

        if ($scope.loan.duration < $scope.limits.duration.max) {
            $scope.loan.duration += $scope.limits.duration.step;
        }
    };

    $scope.decrementDuration = function() {
        if (!$scope.loan.$valid()) {
            $scope.loan.duration = $scope.limits.duration.min;
        }

        if ($scope.loan.duration > $scope.limits.duration.min) {
            $scope.loan.duration -= $scope.limits.duration.step;
        }
    };

    $scope.incrementAmount = function () {
        if (!$scope.loan.$valid()) {
            $scope.loan.amount = $scope.limits.amount.max;
        }
        if ($scope.loan.amount < $scope.limits.amount.max) {
            $scope.loan.amount += $scope.limits.amount.step;
            console.log($scope.loan.amount);
        }
    };

    $scope.decrementAmount = function() {
        if (!$scope.loan.$valid()) {
            $scope.loan.amount = $scope.limits.amount.min;
        }

        if ($scope.loan.amount > $scope.limits.amount.min) {
            $scope.loan.amount -= $scope.limits.amount.step;
        }
    };
    
    $scope.calculateLoan = function () {
        var $result = loanService.calculateLoan($scope.loan.amount, $scope.loan.duration, $scope.loan.interestRate, $scope.loan.periodsInYear, $scope.loan.initialPayment, $scope.loan.finalPayment);
        $scope.loan.payment = $result.payment;
        $scope.loan.totalRepayment = $result.totalRepayment;
        $scope.loan.interestPayable = $result.interestPayable;
        $scope.loan.representativeApr = $result.representativeApr;
    };
    
    $scope.calculateLoan();
});
