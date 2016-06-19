var app = angular.module('dataApp', []);
app.controller('dataCtrl', ['$scope','$http', function($scope, $http) {
    $http.get('./js/data.json').success (function(data){
            $scope.content= data;
        });
        $scope.$on('ActivateTimeline', function(){
            $('#timeline').timeline({
                startSide: 'left',
                alternate: true,
                showDate: true,
                animate: true
            });
        });
        $scope.$on('Refresh', function(){
            Waypoint.refreshAll()
        });
    }
    
    ]
);
app.directive('emitLastRepeaterElementTimeline', function() {
    return function(scope) {
        if (scope.$last){
            scope.$emit('ActivateTimeline');
        }
    };
});
app.directive("refreshALL", function(){
    return function(scope){
        if (scope.$last){
            scope.$emit('Refresh');
        }
    }
})