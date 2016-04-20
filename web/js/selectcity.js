$(function () {

   $(document).on('change','#country-name',function () {
       var country =$('#country-name').val();
       $.ajax({
           type:"POST",
           url:"",
           data: ({country:country}),
          // dataType: 'json',
          // success:function(msgs){
               //for(var i = 0; i < msgs.length; i++)
               //{
                 //  var html = '<b>' + msgs[i].Name + '</b> ';

                  // $('.posts-create').html('country');

               //}

          // }
       });

});

});