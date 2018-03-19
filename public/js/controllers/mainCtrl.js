angular.module('mainCtrl', []).controller('mainController', function($scope, $http, Comment) {
    // object to hold all the data for the new comment form
    $scope.commentData = {};
    // loading variable to show the spinning loading icon
    $scope.loading = true;
    Comment.get().then(function(data) {
        $scope.comments = data.data;
        $scope.loading = false;
    });
    $scope.submitComment = function() {
        $scope.loading = true;
        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Comment.save($scope.commentData).then(function(data) {
            // if successful, we'll need to refresh the comment list
            Comment.get().then(function(getData) {
                $scope.comments = getData.data;
                $scope.loading = false;
            });
        }, function(data) {
            console.log(data);
        });
    };
    $scope.deleteComment = function(id) {
        $scope.loading = true; 
        // use the function we created in our service
        Comment.destroy(id).then(function(data) {
            // if successful, we'll need to refresh the comment list
            Comment.get().then(function(getData) {
                $scope.comments = getData.data;
                $scope.loading = false;
            });
        });
    };
});
