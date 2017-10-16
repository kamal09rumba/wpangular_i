app.controller('HomeCtrl',['$scope', 'Posts', function($scope,Posts){
    console.log('HomeCtrl initialized');
    //services
    Posts.getPosts().then(function(data){
            $scope.posts = data;
            console.log($scope.posts);
        }

    );
}

]);