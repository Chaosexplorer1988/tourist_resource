$(function () {
    Array.prototype.unique = function() {

        return this.filter(function(value, index, _this) {

            return _this.indexOf(value) === index;

        });
    }

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
                console.log(html);
          }
       });

});

});