  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/js/app.js') }}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>
  
  {{-- font awsome --}}
  <script src="https://kit.fontawesome.com/5fbaa464bd.js" crossorigin="anonymous"></script>
  
  <script>
    
    $(".btnrating").on('click',(function(e) {
      
      var previous_value = $("#selected_rating").val();
      
      var selected_value = $(this).attr("data-attr");
      $("#selected_rating").val(selected_value);
      
      $(".selected-rating").empty();
      $(".selected-rating").html(selected_value);
      
      for (i = 1; i <= selected_value; ++i) {
        $("#rating-star-"+i).toggleClass('btn-warning');
        $("#rating-star-"+i).toggleClass('btn-default');
      }
      
      for (ix = 1; ix <= previous_value; ++ix) {
        $("#rating-star-"+ix).toggleClass('btn-warning');
        $("#rating-star-"+ix).toggleClass('btn-default');
      }
      
    }));
  </script>