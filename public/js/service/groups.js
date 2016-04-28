omgApp.factory("Group", function ($http, API_URL) {

    return {
        fetch : function() {
            return $http.get(API_URL + 'groups');
        }
    };
});