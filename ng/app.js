var app = angular.module('dataApp', []);
app.controller('dataCtrl', ['$scope','$http', function($scope, $http) {
    $http.get('./data.json').success (function(data){
            $scope.content= data;
        });
        $scope.$on('ActivateTimeline', function(){
            $('#timeline').timeline({
                startSide: 'left',
                alternate: true,
                showDate: true,
                animate: true
            });
            $("#loading").addClass('sendToBack').addClass('fadeOut');
            $('html').removeClass('preventScroll');
        });
    }
    ]
)
.directive('emitLastRepeaterElementTimeline', function() {
    return function(scope) {
        if (scope.$last){
            scope.$emit('ActivateTimeline');
        }
    };
})
setTimeout(function(){ Waypoint.refreshAll(); }, 1200);
setTimeout(function(){ Waypoint.refreshAll(); }, 4200);