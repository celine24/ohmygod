
omgApp.factory("Pv", function ($http, API_URL) {

    return {
        fetch : function() {
            return $http.get(API_URL + 'pvs');
        }
        //,
        // create : function(movie) {
        //    return  $http.post(API_URI, movie);
        //},
        //
        //remove : function(id) {
        //    return $http.delete(API_URI + '/' + id);
        //},
        //
        //fetchOne : function(id) {
        //    return $http.get(API_URI + '/' + id);
        //},
        //
        //update : function(movie) {
        //    return $http.put('/server/api/movies', movie);
        //}
    };
});
