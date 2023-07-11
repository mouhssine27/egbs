// $(document).ready(function() {
//     $('#kids').hide();
//     $('input[type="radio"]').change(function() {
//       if ($(this).is(':checked')) {
//         var val = $("input[name='married']:checked").val();
//         if(val == 1){
//             $('#kids').show();
//         }else{
//             $('#kids').hide();
//         }
       
//       }
//     });
//   });

// $("#age").on("input", function() {
//     if($(this).val() <= '30'){
//         $('#age').addClass("green");
//     }
//    else if($(this).val() >=" 30" && $(this).val() < "40"){
//     $('#age').removeClass("green");
//         $('#age').addClass("orange");
//     }
// else{
//     $('#age').addClass("red");
// }
    
//  });

 $(document).ready(function() {
    $('#block').hide();
    $('#job').click(function() {
        $('#block').show();
    });
  });