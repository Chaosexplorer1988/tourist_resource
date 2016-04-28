$(function () {
    Array.prototype.unique = function() {

        return this.filter(function(value, index, _this) {

            return _this.indexOf(value) === index;

        });
    }
   $(document).on('click', '#comment', function () {
       var comment = $('#text_comment').val();
       var post_id = $('#post_id').val();
       $.ajax({
           type:"POST",
           url:"/posts/createcomm",
           data: ({comment:comment, post_id:post_id}),
           dataType: 'json',
           success:function(com){
               //var html =[];
               for(var i = 0; i < com.length; i++)
               {
                   var html = '<div class="one-comment">';
                   html += '<p> Автор:' + com[i].name + '';
                   html += '<span style="float: right">' + com[i].date_comment + '</span></p>';
                   html += '<p>' + com[i].text_comment + '</p>';
                   html += '</div>';
               }
               $('#messenge').prepend(html);
               $('#text_comment'). val("")
               console.log(html);
           }
       })

   } )
   $(document).on('blur','#country-name',function () {
       var country =$('#country-name').val();
       $.ajax({
           //type:"POST",
           url:"/posts/selectcity",
           data: ({country:country}),
           dataType: 'json',
            success:function(city){
                var html =[];
               for(var i = 0; i < city.length; i++)
               {
                    html[i] =  city[i].Name ;                 
               }
                $('#city-name').autocomplete({ minLength: 2, source: html.unique()});
               // console.log(html);
          }
       });

});

});