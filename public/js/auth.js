window.onload = function() {
    if (!userIsAuthenticated) {
        window.location.href = '/login';
    }
};

