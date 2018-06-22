loanApp.controller('expressLoanController', function ($scope, $location, loanService) {

    $scope.limits = { 
        amount:
        {
            min: 50,
            max: 500,
            step: 50
        },
        duration: {
            min: 1,
            max: 6,
            step: 1
        },
		paymentFrequency: {
			min: 1,
			max: 4,
			step: 1
		}
    };

    var a = parseInt($location.search()['a']) || $scope.limits.amount.min;
    var t = parseInt($location.search()['t']) || $scope.limits.duration.min;
    var f = parseInt($location.search()['f']) || $scope.limits.paymentFrequency.max;

    $scope.loan = {
        payment: 0,
        amount: a,
        duration: t,
        interestRate: 24,
        totalRepayment: 0,
        initialPayment: 0,
        finalPayment: 0,
		paymentFrequency: f,
		periodsInYear: 12,
        frequencyText: getPaymentFrequencyText(f)
    };

    $scope.$watch('loan.amount', function (newVal, oldVal) {
        newVal = parseInt(newVal);
        if (newVal >= $scope.limits.amount.min && newVal <= $scope.limits.amount.max) {
            $scope.loan.amount = newVal;
            $scope.calculateLoan();
        }
    });

    $scope.$watch('loan.duration', function (newVal, oldVal) {
        newVal = parseInt(newVal);
        if (newVal >= $scope.limits.duration.min && newVal <= $scope.limits.duration.max) {
            $scope.loan.duration = newVal;
            $scope.calculateLoan();
        }
    });

    function getPaymentFrequencyText(paymentFrequency) {
        switch (paymentFrequency) {
        case 1: // Weekly
            return 'weekly';
        case 2: // Fortnightly
            return 'fortnightly';
        case 3: // 4-Weekly
            return '4-weekly';
        case 4: // Monthly
            return 'monthly';
        }
    };

	$scope.$watch('loan.paymentFrequency', function (newVal, oldVal) {
	    newVal = parseInt(newVal);

	    if (newVal >= $scope.limits.paymentFrequency.min && newVal <= $scope.limits.paymentFrequency.max) {
	        $scope.loan.paymentFrequency = newVal;
	        $scope.loan.frequencyText = getPaymentFrequencyText(newVal);
	        switch ($scope.loan.paymentFrequency) {
	        case 1: // Weekly
	            $scope.loan.periodsInYear = 52;
	            $scope.limits.duration.max = 24;
	            break;
	        case 2: // Fortnightly
	            $scope.loan.periodsInYear = 26;
	            $scope.limits.duration.max = 12;
	            break;
	        case 3: // 4-Weekly
	            $scope.loan.periodsInYear = 13;
	            $scope.limits.duration.max = 6;
	            break;
	        case 4: // Monthly
	            $scope.loan.periodsInYear = 12;
	            $scope.limits.duration.max = 6;
	            break;
	        }
	        if ($scope.loan.duration > $scope.limits.duration.max) $scope.loan.duration = $scope.limits.duration.max;
	        $scope.calculateLoan();
	    }
	});

    $scope.loan.$valid = function() {
        if ($scope.loan.duration < $scope.limits.duration.min) return false;
        if ($scope.loan.duration > $scope.limits.duration.max) return false;

        if ($scope.loan.amount < $scope.limits.amount.min) return false;
        if ($scope.loan.amount > $scope.limits.amount.max) return false;

		if ($scope.loan.paymentFrequency < $scope.limits.paymentFrequency.min) return false;
        if ($scope.loan.paymentFrequency > $scope.limits.paymentFrequency.max) return false;

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
        }
    };

	$scope.incrementPaymentFrequency = function() {
        if (!$scope.loan.$valid()) {
            $scope.loan.paymentFrequency = $scope.limits.paymentFrequency.max;
        }

        if ($scope.loan.paymentFrequency < $scope.limits.paymentFrequency.max) {
            $scope.loan.paymentFrequency += $scope.limits.paymentFrequency.step;
        }
    };

    $scope.decrementPaymentFrequency = function() {
        if (!$scope.loan.$valid()) {
            $scope.loan.paymentFrequency = $scope.limits.paymentFrequency.min;
        }

        if ($scope.loan.paymentFrequency > $scope.limits.paymentFrequency.min) {
            $scope.loan.paymentFrequency -= $scope.limits.paymentFrequency.step;
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
		var $result = loanService.calculateExpressLoan($scope.loan.amount, $scope.loan.duration, $scope.loan.interestRate, $scope.loan.periodsInYear, $scope.loan.initialPayment, $scope.loan.finalPayment);
        $scope.loan.payment = $result.payment;
        $scope.loan.totalRepayment = $result.totalRepayment;
        $scope.loan.interestPayable = $result.interestPayable;
        $scope.loan.representativeApr = $result.representativeApr;
    };
    
    $scope.calculateLoan();
});
