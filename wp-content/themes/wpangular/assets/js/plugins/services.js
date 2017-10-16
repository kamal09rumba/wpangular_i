//services for application 'app', this is what injected to the controllers
app.factory('Posts',['$http',function($http)
    {
        return{
            getPosts:function(){
                var response = $http({
                    url:ajaxurl,
                    method:"GET",
                    params: {action:'test_ajax'}
                }).then(function(response){
                    return response.data;
                    });
                return response;
            }
        }

    }
    ]
);