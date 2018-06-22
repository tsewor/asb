// = JS for application pipelines
//-----------------------------------------------------------------------------//

// = sick or maternity leave
//-----------------------------------------------------------------------------// 
    var sicknessOrMaternityLeave    = $('#SicknessOrMaternityLeave, #SecondApplicantSicknessOrMaternityLeave');
    var sicknessOrMaternityDisplay  = $('.js-sickormaternity');
    
    sicknessOrMaternityDisplay.hide();
    
    function sicknessOrMaternityFields() {
        if(sicknessOrMaternityLeave.val() == 'Yes') {
            sicknessOrMaternityDisplay.show();
        } else {
            sicknessOrMaternityDisplay.hide();        
        }
    }
    
    sicknessOrMaternityFields();
    
    sicknessOrMaternityLeave.on('change', sicknessOrMaternityFields);


// = employment status
//-----------------------------------------------------------------------------// 
    var employmentDisplay       = $('.js-employed');
    var selfEmploymentDisplay   = $('.js-selfemployed');
    var bothEmploymentStatus    = $('.js-employed-selfemployed');
    var employmentStatus        = $('#EmploymentStatus, #SecondApplicantEmploymentStatus');

    function employmentFields() {
        if(employmentStatus.val() == 'Employed full time' || employmentStatus.val() == 'Employed part time') {
            employmentDisplay.show();
            bothEmploymentStatus.show();
            selfEmploymentDisplay.hide();
            sicknessOrMaternityFields();
        } else if(employmentStatus.val() == 'Self employed') {
            employmentDisplay.hide();
            bothEmploymentStatus.show();
            selfEmploymentDisplay.show();
            sicknessOrMaternityFields();
        } else {
            employmentDisplay.hide();
            bothEmploymentStatus.hide();
            selfEmploymentDisplay.hide();
            sicknessOrMaternityDisplay.hide();
        } 
    }
    employmentFields();
    
    employmentStatus.on('change', employmentFields);

// = address
//-----------------------------------------------------------------------------//
    var addressDisplay  = $('.js-address');
    var yearsAtAddress  = $('#YearsAtAddress, #SecondApplicantYearsAtAddress');

    addressDisplay.hide();

    function yearAtAddressField() {
        if(yearsAtAddress.val() == 1 || yearsAtAddress.val() == 2) {
            addressDisplay.show();
        } else {
            addressDisplay.hide();
        }
    }
    
    yearAtAddressField();

    yearsAtAddress.on('keyup', yearAtAddressField);

    

// = mortgage details
//-----------------------------------------------------------------------------//

    var remortgageSelect =      $('#LookingToRemortgage');
    var primaryAddress =        $('#UsePrimaryApplicantAddress');
    var currentlyOwnSelect =    $('#CurrentPropertyOwn'); 
    var remortgageYes =         $('.js-remortgage-yes');
    var remortgageNo =          $('.js-remortgage-no');
    var currentlyOwnYes =       $('.js-currently-own-yes');
    
    $('.js-mortgage').hide();
    

    
    function primaryAppAddress() {
        
        if(primaryAddress.val() == 'Yes') {
            
            $('.js-primary-address-yes').show();
            $('.js-primary-address-no').hide();
                
        } else if (primaryAddress.val() == 'No') {
            
            $('.js-primary-address-no, .js-primary-address-yes').show();
            
        } else {
            
            $('.js-primary-address-no, .js-primary-address-yes').hide();
            
        }
    }
    
    function currentlyOwn() {
        
        if(currentlyOwnSelect.val() == 'Yes') {
            
            currentlyOwnYes.show();
            
            
        } else if(currentlyOwnSelect.val() == 'No') {
            
            currentlyOwnYes.hide();
            
        } else {
            
            currentlyOwnYes.hide();
            
        }
        
    }
    
        
    function remortgage() {
        
        if(remortgageSelect.val() == 'Yes') {
            
            remortgageYes.show();
            remortgageNo.hide();
            currentlyOwnYes.hide();
            primaryAppAddress();
                
        } else if (remortgageSelect.val() == 'No') {

            currentlyOwn();
            $('.js-primary-address-no, .js-primary-address-yes').hide();            
            remortgageYes.hide();
            remortgageNo.show();

            
        } else {

            $('.js-primary-address-no, .js-primary-address-yes').hide();
            remortgageYes.hide();
            remortgageNo.hide();
            currentlyOwnYes.hide();
            
        }
    }

    primaryAppAddress();
    currentlyOwn();
    remortgage();

    
    remortgageSelect.on('change', remortgage);
    primaryAddress.on('change', primaryAppAddress);
    currentlyOwnSelect.on('change', currentlyOwn);
    