(function ($, Drupal) {
    Drupal.behaviors.statecityWebform = {
      attach: function (context, settings) {
        // Attach event handlers to all state dropdowns with the class 'nj-state-dropdown'.
        $('.nj-state-dropdown', context).once('statecityWebform').change(function () {
          var $stateDropdown = $(this);
          var stateId = $stateDropdown.val();
          
          // Find the associated city dropdown by traversing the DOM.
          var $cityDropdown = $stateDropdown.closest('form').find('.nj-city-dropdown');
  
          if (stateId) {
            $.ajax({
              url: '/api/cities/' + stateId,
              type: 'GET',
              dataType: 'json',
              success: function (data) {
                $cityDropdown.empty();
                $.each(data, function (index, city) {
                  $cityDropdown.append($('<option></option>').val(city).text(city));
                });
              },
              error: function () {
                console.error('Failed to fetch cities.');
              }
            });
          }
        });
      }
    };
  })(jQuery, Drupal);
  