var filterPage = (function() {

    // All functionality is built around jQuery.... Wont work without it!
    var ranges = [];
    var filter = {
        rooms: [1, 4, 3, 2]
    };

    var results = document.querySelectorAll('.js-filter__result');
    var hiddenResultsClass = 'filter__result_hidden';
    var visibleResultsClass = 'filter__result_visible';
    var filteredResults = [];
    // Show per new search
    var defaultSearchNumber = 2;
    var resultsPerSearch = defaultSearchNumber;
    var moreResults = 2;
    // More results button
    var moreResultsBtn = document.querySelector('.js-filter__more-results');
    // Container with checkboxes for change event
    var filterRoomsCheckboxes = document.querySelector('.js-filter__rooms');
    // Checkboxxes themselfes
    var checkBoxes = filterRoomsCheckboxes.querySelectorAll('input[type="checkbox"]');
    // filter btn
    var filterBtn = document.querySelector('.js-filter__btn');
    // found
    var resultsFoundNumber = document.querySelector('.filter__results-found-numb');
    // filter reset btn
    var filterResetBtn = document.querySelector('.js-filter__reset');

    // range constructor responsible for updating ranges, updating text inputs, updating global filter state 
    function Range(parentSelector, type) {
        var self = this;
        this.type = type;
        this.parent = $(parentSelector);
        this.min = this.parent.find('.js-filter__hidden-values').attr('min');
        this.max = this.parent.find('.js-filter__hidden-values').attr('max');
        this.minText = this.parent.find('.js-filter__text_min');
        this.maxText = this.parent.find('.js-filter__text_max');

        // update filter values
        this.updateFiler = function() {
            filter[self.type] = {
                min: slider.old_from !== undefined ? slider.old_from : self.min,
                max: slider.old_to !== undefined ? slider.old_to : self.max
            }
        };

        // Set values for text inputs on initialisation
        this.minText.val(this.min);
        this.maxText.val(this.max);

        // When user drags range update text inputs
        this.handleDrag = function(data) {
            $(self.minText).val(data.from);
            $(self.maxText).val(data.to);
        };

        // when user types into text inputs make sure that only numbers get through
        this.handleTextInput = function(e) {
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        }

        // Initialize slider
        this.ionRange = this.parent.find('.js-filter__range').ionRangeSlider({
            min: this.min,
            max: this.max,
            type: 'double',
            prettify: true,
            hide_min_max: true,
            hide_from_to: true,
            onChange: function(data) {
                self.handleDrag(data);
                self.updateFiler();
            }
        });

        var slider = this.ionRange.data("ionRangeSlider");

        // This event handlers prevent text input in number inputs but keydown fires before it places value inside input and you need that values to update ranges
        // thats why keyup event added 
        this.minText.keydown(self.handleTextInput);
        this.maxText.keydown(self.handleTextInput);
        
        this.minText.keyup(function() {
            slider.update({from: this.value});
            self.updateFiler();
        });
        this.maxText.keyup(function() {
            slider.update({to: this.value});
            self.updateFiler();
        });

        this.updateFiler();

    }; // end Range constructor

    var priceTotalRange = new Range('.js-filter__slider_pt', 'pricetotal');
    var areaTotalRange = new Range('.js-filter__slider_ta', 'totalarea');
    var priceMeterRange = new Range('.js-filter__slider_pm', 'pricemeter');
    var livingAreaRange = new Range('.js-filter__slider_la', 'livingarea');

    ranges.push(priceTotalRange);
    ranges.push(areaTotalRange);
    ranges.push(priceMeterRange);
    ranges.push(livingAreaRange);

    function filterResults() {
        resultsPerSearch = defaultSearchNumber;
        filteredResults = [];

        results.forEach(function(result) {

            var passed = false;
            var resultObject = $(result).data();

            for(var key in filter) {
                if(!($.isArray(filter[key]))) {
                    // Value is Object literal
                    var val = resultObject[key];
                    if(filter[key].min <= val && filter[key].max >= val) {
                        // Passed min max filters
                        passed = true;
                    } else {
                        // Not passed min max filters
                        passed = false;
                        break;
                    }
                } else {
                    // Value is array
                    if(filter[key].indexOf(resultObject[key])!==-1) {
                        // Found number of rooms in array
                        passed = true;
                    } else {
                        // Not found number of rooms in array
                        passed = false;
                        break;
                    }
                }
            }

            // If passed all filters result goes into filtered array
            if(passed) {
                filteredResults.push(result);
            }

        }); // End foreach
        resultsFoundNumber.innerHTML = filteredResults.length;
        hideAllResults();
        showFiltered();
    };
    filterResults();

    // Hide all results
    function hideAllResults() {
        results.forEach(function(result){
            result.classList.remove(visibleResultsClass);
            result.classList.add(hiddenResultsClass);
        });
    };

    // Show more results function creation 
    function showFiltered() {
        filteredResults.forEach(function(result, index) {
            if(index  < resultsPerSearch) {
                result.classList.remove(hiddenResultsClass);
                result.classList.add(visibleResultsClass);
            }
        });
    };

    // Checkboxes change event
    filterRoomsCheckboxes.addEventListener('change', function(){
        filter.rooms = [];
        checkBoxes.forEach(function(checkbox) {
            if(checkbox.checked) {
                filter.rooms.push(parseInt(checkbox.value));
            }
        });
        // If no checkboxes selected show all rooms
        if(filter.rooms.length === 0) {
            resetCheckboxes();
        }
    });

    function resetCheckboxes() {
        checkBoxes.forEach(function(checkbox) {
            checkbox.checked = false;
            filter.rooms.push(parseInt(checkbox.value));
        });
    };

    moreResultsBtn.addEventListener('click', function(e) {
        e.preventDefault();
        resultsPerSearch = resultsPerSearch + moreResults;
        showFiltered();
    });

    filterBtn.addEventListener('click', function(e) {
        e.preventDefault();
        filterResults();
    });

    filterResetBtn.addEventListener('click', function(e) {
        e.preventDefault();
        ranges.forEach(function(range) {
            var slider = range.ionRange.data("ionRangeSlider");
            slider.update({
                from: range.min,
                to: range.max
            });
            range.updateFiler();
            $(range.minText).val(range.min);
            $(range.maxText).val(range.max);
            resetCheckboxes();
            filterResults();
        })
    })

})();