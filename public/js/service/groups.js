omgApp.factory("Group", function ($http, API_URI) {

    return {
        fetch : function() {
            return $http.get(API_URI + 'groups');
        }
    };
});